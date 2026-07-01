<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    public function index()
    {
        $response['ads'] = Advertisement::orderByDesc('id')->get();

        /* Alerts */
        $response['admin'] = Auth::user();
        $response['notifications'] = auth()->user()->notifications()->latest()->get();

        // Adiciona o usuário autor de cada notificação
        $response['notifications']->each(function ($notif) {
            if (isset($notif->data['user_id'])) {
                $notif->user = User::find($notif->data['user_id']);
            } else {
                $notif->user = null;
            }
        });          // todas
        $response['unreadNotifications'] = $response['admin']->unreadNotifications; // não lidas
        $response['unreadCount'] = auth()->user()->unreadNotifications->count();


        return view('_admin.ads.list.index', $response);
    }

    public function create()
    {
        /* Alerts */
        $response['admin'] = Auth::user();
        $response['notifications'] = auth()->user()->notifications()->latest()->get();

        // Adiciona o usuário autor de cada notificação
        $response['notifications']->each(function ($notif) {
            if (isset($notif->data['user_id'])) {
                $notif->user = User::find($notif->data['user_id']);
            } else {
                $notif->user = null;
            }
        });          // todas
        $response['unreadNotifications'] = $response['admin']->unreadNotifications; // não lidas
        $response['unreadCount'] = auth()->user()->unreadNotifications->count();


        return view('_admin.ads.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'link' => 'nullable|url',
            'active' => 'boolean'
        ], [
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 5MB.',
        ]);

        $adevertisement = new Advertisement();
        $adevertisement->title = $request->title;
        $adevertisement->link = $request->link;
        $adevertisement->status = $request->active;

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $path = $image->storeAs('img/ads', $imageName, 'public');
            $adevertisement->image = $path; // Adiciona o nome da imagem ao array de dados
        }

        $adevertisement->save();

        return redirect()->route('admin.ads.index')->with('success', 'Publicidade criada com sucesso!');
    }

    public function show(Advertisement $advertisement)
    {
        return view('_admin.ads.show.index', compact('advertisement'));
    }

    public function edit(Advertisement $advertisement)
    {
        return view('_admin.ads.edit.index', compact('advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'link' => 'nullable|url',
            'active' => 'boolean'
        ], [
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 5MB.',
        ]);

        //verificar se existe uma imagem antiga e deletar
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Deletar a imagem antiga, se existir
            if ($advertisement->image) {
                $oldImagePath = public_path('storage/img/ads/' . $advertisement->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload da nova imagem
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $path = $image->storeAs('img/ads', $imageName, 'public');
            $advertisement->image = $path; // Atualiza o nome da imagem no modelo
        }

        $advertisement->title = $request->title;
        $advertisement->link = $request->link;
        $advertisement->status = $request->active;
        $advertisement->update();

        return redirect()->route('admin.ads.index')->with('success', 'Anúncio atualizado com sucesso!');

    }

    public function destroy(Advertisement $advertisement)
    {
        // Deletar a imagem, se existir
        if ($advertisement->image) {
            $oldImagePath = public_path('storage/img/ads/' . $advertisement->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $advertisement->delete();

        return redirect()->route('admin.ads.index')->with('success', 'Anúncio excluído com sucesso!');
    }
}

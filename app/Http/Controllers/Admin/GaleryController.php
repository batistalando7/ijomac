<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::orderByDesc('id')->get();
        return view('_admin.galery.list.index', compact('galeries'));
    }

    public function create()
    {
        return view('_admin.galery.create.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'images'   => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'images.required' => 'Por favor, selecione pelo menos uma imagem.',
            'images.*.image' => 'Cada arquivo deve ser uma imagem válida.',
            'images.*.mimes' => 'Cada imagem deve ser do tipo: jpg, jpeg, png, webp.',
            'images.*.max' => 'Cada imagem não deve exceder 2MB.',
        ]);

        // 1. Cria a Galeria sem o campo 'image'
        $galery = Galery::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        // 2. Se houver imagens, guarda-as na tabela galery_images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $imageName = md5($image->getClientOriginalName() . microtime()) . '.' . $image->extension();

                    // Guarda o ficheiro no storage (corrigi o caminho e o disco)
                    $path = $image->storeAs('galeries/img', $imageName, 'public');

                    // Cria o registo na tabela secundária usando a relação
                    $galery->images()->create([
                        'galery_id' => $galery->id,
                        'image' => $path
                    ]);
                }
            }
        }

        return redirect()->route('admin.galery.index')->with('success', 'Galeria criada com sucesso.');
    }



    public function show(Galery $galery)
    {
        return view('_admin.galery.details.index', compact('galery'));
    }


    public function edit(Galery $galery)
    {
        return view('_admin.galery.edit.index', compact('galery'));
    }

    public function update(Request $request, Galery $galery)
    {
        dd($request->all(), $request->file('images'));
        $request->validate([
            'name'    => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'images'   => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ],
        [
            'images.*.image' => 'Cada arquivo deve ser uma imagem válida.',
            'images.*.mimes' => 'Cada imagem deve ser do tipo: jpg, jpeg, png, webp.',
            'images.*.max' => 'Cada imagem não deve exceder 2MB.',
        ]);

        // 1. Atualiza apenas os dados básicos da galeria
        $galery->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        // 2. Adiciona as novas imagens à tabela galery_images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $extension = $image->extension();
                    $imageName = md5($image->getClientOriginalName() . microtime()) . '.' . $extension;

                    // Guarda o ficheiro no storage e obtém o caminho
                    $path = $image->storeAs('galeries/img', $imageName, 'public');

                    // Cria o registo na tabela relacionada (galery_images)
                    $galery->images()->create([
                        'galery_id' => $galery->id,
                        'image' => $path
                    ]);
                }
            }
        }

        return redirect()->route('admin.galery.index')->with('success', 'Galeria atualizada com sucesso!');
    }


    public function destroy(Galery $galery)
    {
        if ($galery->image && is_array($galery->image)) {
            foreach ($galery->image as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $galery->delete();
        return redirect()->route('admin.galery.index')->with('success', 'Galeria e suas fotos foram eliminadas.');
    }

}

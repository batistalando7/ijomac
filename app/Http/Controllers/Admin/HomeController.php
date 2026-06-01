<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\News;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function management()
    {
        $response['publicNews'] = News::where('status', 'publicado')->count();//número de notícias publicadas
        $response['filedNews'] = News::where('status', 'arquivado')->count();//número de notícias arquivadas
        $response['draftNews'] = News::where('status', 'rascunho')->count();//número de notícias em rascunho
        $response['premiumNews'] = News::where('detach', 'premium')->count();//número de notícias premium

        $response['qtdNews'] = News::count();//número total de notícias

        /* Criação de uma função para o calculo de percentagem */
        function percent($part, $total)
        {
            return $total > 0 ? number_format((100 * $part) / $total, 1) : 0;
        }

        $response['publicNewsPrecent'] = percent(($response['publicNews']),$response['qtdNews']);//porcentagem de notícias publicadas
        $response['filedNewsPrecent'] = percent(($response['filedNews']),$response['qtdNews']);//porcentagem de notícias arquivadas
        $response['draftNewsPrecent'] = percent(($response['draftNews']),$response['qtdNews']);//porcentagem de notícias em rascunho
        $response['premiumNewsPrecent'] = percent(($response['premiumNews']),$response['qtdNews']);//porcentagem de notícias premium

        $response['coursesTotal'] = Course::count();//número total de cursos
        $response['servicesTotal'] = Course::count();//número total de serviços

        $response['users'] = User::paginate(5);//bucando ustilizadores

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



        return view('_admin.dashboard.crm.index', $response);
    }


}

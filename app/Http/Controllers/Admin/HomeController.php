<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Service;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Category;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function management()
    {

        $response['coursesTotal'] = Course::count(); //número total de cursos
        $response['servicesTotal'] = Service::count(); //número total de serviços
        $response['usersTotal'] = User::count(); //número total de usuários
        $response['teachersTotal'] = Teacher::count(); //número total de professores

        $response['categoryCourses'] = Category::with('course')->whereHas('course', function ($query) {
            $query->whereNotNull('category_id');
        })->get();

        $response['users'] = User::paginate(5); //bucando ustilizadores

        /* Alerts */
        $response['admin'] = Auth::user();
        /* $response['notifications'] = auth()->user()->notifications()->latest()->get();

        // Adiciona o usuário autor de cada notificação
        $response['notifications']->each(function ($notif) {
            if (isset($notif->data['user_id'])) {
                $notif->user = User::find($notif->data['user_id']);
            } else {
                $notif->user = null;
            }
        });          // todas
        $response['unreadNotifications'] = $response['admin']->unreadNotifications; // não lidas
        $response['unreadCount'] = auth()->user()->unreadNotifications->count(); */

        //consulta de estudantes e solicitações de serviço por mês no ano atual
        $response['students'] = DB::table('students')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y')) // ano atual
            ->groupByRaw('MONTH(created_at)')
            ->orderByRaw('MONTH(created_at)')
            ->get();

        $response['serviceRequests'] = DB::table('service_requests')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', date('Y')) // ano atual
            ->groupByRaw('MONTH(created_at)')
            ->orderByRaw('MONTH(created_at)')
            ->get();
        // fim de consulta de estudantes e solicitações de serviço por mês no ano atual

        return view('_admin.dashboard.index', $response);
    }
}

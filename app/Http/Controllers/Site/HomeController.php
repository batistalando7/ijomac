<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\Video;
use App\Models\Course;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function home()
    {

        $response['categories'] = Category::take(4)->get();

        $response['courses'] = Course::where('status', 'published')->orderByDesc('id')->take(3)->get();

        $response['teachers'] = Teacher::orderByDesc('id')->take(3)->get();

        /* Modal de Subscrição */
        $response['subscription'] = News::where('status', 'publicado')->where('detach', 'destaque')->orderByDesc('id')->first();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */
        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        /* Posts Recentes no Footer */
        $response['Recent'] = News::where('status', 'publicado')->orderBy('updated_at', 'desc')->take(2)->get();

        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.home.index', $response);
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {

        $response['categories'] = Category::take(4)->get();

        $courses = Course::all();
        $response['courses'] = $courses;

        if ($courses->count() > 0) {


            $bannerCourse = Course::where('status', 'published')->orderByDesc('id')->first();
            $response['bannerCourse'] = $bannerCourse;
            $response['courses'] = Course::where('status', 'published')->where('id', '!=', $bannerCourse->id)->orderByDesc('id')->take(3)->get();

        }
        $response['services'] = Service::orderByDesc('id')->take(3)->get();


        $response['teachers'] = Teacher::orderByDesc('id')->take(3)->get();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */
        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();


        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.home.index', $response);
    }
}

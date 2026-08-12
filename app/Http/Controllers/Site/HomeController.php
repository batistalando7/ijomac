<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\Student;

class HomeController extends Controller
{
    public function index()
    {

        $response['categories'] = Category::take(4)->get();

        $courses = Course::where('status', 'published')->get();
        $response['courses'] = $courses;

        /* if ($courses->count() > 0) {


            $bannerCourse = Course::where('status', 'published')->orderByDesc('id')->first();
            $response['bannerCourse'] = $bannerCourse;
            $response['courses'] = Course::where('status', 'published')->where('id', '!=', $bannerCourse->id)->orderByDesc('id')->take(6)->get();
        } */
        $response['services'] = Service::where('status', 'published')->orderByDesc('id')->take(3)->get();


        $response['teachers'] = Teacher::orderByDesc('id')->take(3)->get();

        /* --------- Sessão da Categoria de Notícias (algumas categorias) ----------------- */
        $response['footerCategory'] = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();


        $response['ads'] = Advertisement::orderByDesc('id')->take(1)->get();

        $response['clientTotal'] = ServiceRequest::count() + Student::count();
        $response['finalistTotal'] = Student::where('status', true)->count();
        $response['teacher'] = Teacher::count();
        if ($response['clientTotal'] != 0) {
            $response['successPercent'] = ($response['clientTotal'] * 100) / $response['clientTotal'];
        }

        //carregar logo dos parceiros
        $response['partners'] = Advertisement::where('status', true)->orderByDesc('id')->take(6)->get();
        return view('site.home.index', $response);
    }
}

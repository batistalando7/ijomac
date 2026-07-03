<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AboutController extends Controller
{
    public function index()
    {
        $response['teachers'] = Teacher::orderByDesc('id')->get();

        //carregar logo dos parceiros
        $response['partners'] = Advertisement::where('status', true)->orderByDesc('id')->take(6)->get();

        return view('site.about.index', $response);
    }

    public function faqs()
    {
        return view('site.faqs.index');
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $response['teachers'] = Teacher::orderByDesc('id')->get();
        return view('site.about.index', $response);
    }

    public function faqs()
    {
        return view('site.faqs.index');
    }
}

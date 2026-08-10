<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
        public function index()
    {
        $response['galery'] = Galery::where('status', true)->orderByDesc('id')->get();
        return view('site.galery.index', $response);
    }

    public function show(Galery $galery)
    {
        $response['galery'] = $galery;
        $response['images'] = $galery->images()->orderByDesc('id')->paginate(2);
        
        //preparando informacoes do asside bar
        $response['recentGaleries'] = Galery::where('status', true)->where('id', '!=', $galery->id)->orderByDesc('id')->take(5)->get();
        $response['services'] = \App\Models\Service::where('status', true)->orderByDesc('id')->take(5)->get();
        $response['courses'] = \App\Models\Course::where('status', true)->orderByDesc('id')->take(5)->get();

        return view('site.galery.show', $response);
    }
}

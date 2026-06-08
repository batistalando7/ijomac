<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $response['services'] = Service::orderByDesc('id')->get();
        return view('site.service.index', $response);
    }

    public function show(Service $service)
    {
        $response = [
            'service' => $service,
            'relatedServices' => Service::where('id', '!=', $service->id)->orderByDesc('id')->take(4)->get(),
        ];
        return view('site.service.details', $response);
    }   
}

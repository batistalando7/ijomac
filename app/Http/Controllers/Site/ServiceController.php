<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceRequest;

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

    public function request(Service $service)
    {
        $response = [
            'service' => $service,
        ];
        return view('site.service.request', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'nullable|email|max:255',
            'client_phone' => 'nullable|string|max:13',
            'service_id' => 'required|exists:services,id'
        ], [
            'client_name.required' => 'Nome do Cliente é obrigatório',
            'client_email.email' => 'Email não é válido',
            'client_phone.max' => 'Excedeu o número caracteres para um número válido',
            'service_id.required' => 'Id do Serviço não identificado'
        ]);

        if (empty($request->client_email) && empty($request->client_phone)) {
            return redirect()->back()->with('error', 'Não podemos avançar sem o email ou número de telefone do cliente!');
        }

        ServiceRequest::create([
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'client_phone' => $request->client_phone,
            'service_id' => $request->service_id
        ]);

        return redirect()->route('site.home')->with('success', 'Enviado com sucesso!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ServiceRequestController extends Controller
{
    public function index()
    {
        $response['serviceRequests'] = ServiceRequest::with('service')->orderByDesc('id')->get();

        return view('_admin.serviceRequest.list.index', $response);
    }

    public function create()
    {
        $services = Service::all();

        return view('_admin.serviceRequest.create.index', compact('services'));
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

        $serviceRequest = new ServiceRequest();
        $serviceRequest->create([
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'client_phone' => $request->client_phone,
            'service_id' => $request->service_id
        ]);

        return redirect()->route('admin.serviceRequest.index')->with('success', 'Cadastrado com sucesso!');
    }

    public function show(ServiceRequest $serviceRequest)
    {
        return view('_admin.serviceRequest.details.index', compact('serviceRequest'));
    }

    public function edit(ServiceRequest $serviceRequest)
    {
        $response = [
            'serviceRequest' => $serviceRequest,
            'services' => Service::all()
        ];
        return view('_admin.serviceRequest.edit.index', $response);
    }

    public function update(Request $request, ServiceRequest $serviceRequest)
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

        $serviceRequest->update([
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'client_phone' => $request->client_phone,
            'service_id' => $request->service_id
        ]);

        return redirect()->route('admin.serviceRequest.index')->with('success', 'Actualizado com sucesso!');
    }

    public function destroy(ServiceRequest $serviceRequest)
    {
        $serviceRequest->delete();
        return redirect()->route('admin.serviceRequest.index')->with('success', 'Deletado com sucesso!');
    }
}

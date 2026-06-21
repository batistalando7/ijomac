<div class="row">
    {{-- Nome do Cliente  --}}
    <div class="col-lg-8 mb-4">
        <label class="form-label">Nome do Cliente</label>
        <input type="text" name="client_name" class="form-control" value="{{ old('client_name', $serviceRequest->client_name ?? '') }}"
            placeholder="">
    </div>

    {{-- serviços --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Serviços</label>
        <select name="service_id" class="form-control">
            <option value="{{ $serviceRequest->service_id ?? '' }}">{{ $serviceRequest->service->name ?? 'Selecione uma categoria' }}</option>
            @foreach($services as $item)
                <option value="{{ $item->id }}" {{ old('service_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
    </div>
    
    {{-- Email do Cliente  --}}
    <div class="col-lg-6 mb-4">
        <label class="form-label">Email do Cliente</label>
        <input type="eamil" name="client_email" class="form-control" value="{{ old('client_email', $serviceRequest->client_email ?? '') }}"
            placeholder="">
    </div>
    
    {{-- Telefone do cliente  --}}
    <div class="col-lg-6 mb-4">
        <label class="form-label">Telefone do Cliente</label>
        <input type="text" name="client_phone" class="form-control" value="{{ old('client_phone', $serviceRequest->client_phone ?? '') }}"
            placeholder="">
    </div>

    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>

<div class="row">
    {{-- Nome --}}
    <div class="col-lg-8 mb-4">
        <label class="form-label">Nome do Formador</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->name ?? '') }}">
    </div>
    
    {{-- Emails --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Email do Formador</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email ?? '') }}">
    </div>
    
    {{-- Telefone --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Telefone do Formador</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $teacher->phone ?? '') }}">
    </div>

    {{-- endereço --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Endereço do Formador</label>
        <input type="text" name="address" class="form-control" value="{{ old('address', $teacher->address ?? '') }}">
    </div>
    
    {{-- data de entrada --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Data de Entrada</label>
        <input type="date" name="entry_date" class="form-control" value="{{ old('entry_date', $teacher->entry_date ?? '') }}">
    </div>

    {{-- photo --}}
    <div class="col-lg-12 mb-4">
        <label class="form-label">Foto do Formador</label>
        <input type="file" name="photo" class="form-control" value="{{ old('photo', $teacher->photo ?? '') }}">
    </div>

    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>

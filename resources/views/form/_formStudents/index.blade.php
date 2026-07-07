<div class="row">
    {{-- Nome do Cliente  --}}
    <div class="col-lg-8 mb-4">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name ?? '') }}"
            placeholder="">
    </div>

    {{-- serviços --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Curso</label>
        <select name="course_id" class="form-control">
            <option value="{{ $student->course_id ?? '' }}">{{ $student->course->name ?? 'Selecione uma categoria' }}</option>
            @foreach($courses as $item)
                <option value="{{ $item->id }}" {{ old('course_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
    </div>
    
    {{-- Email do Cliente  --}}
    <div class="col-lg-6 mb-4">
        <label class="form-label">Email</label>
        <input type="eamil" name="email" class="form-control" value="{{ old('email', $student->email ?? '') }}"
            placeholder="">
    </div>
    
    {{-- Telefone do cliente  --}}
    <div class="col-lg-6 mb-4">
        <label class="form-label">Telefone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone ?? '') }}"
            placeholder="">
    </div>

    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-primary"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>

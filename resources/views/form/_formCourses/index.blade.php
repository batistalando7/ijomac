<div class="row">
    {{-- Campo dos Nomes das categorias --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $course->name ?? '') }}"
            placeholder="">
    </div>
    <div class="col-lg-4 mb-4">
        <label class="form-label">Categoria</label>
        <select name="category_id" class="form-control">
            @if(isset($category))
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="">Selecione uma categoria</option>
            @foreach($categories as $item)
                <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
            @endif
        </select>
    </div>
    <div class="col-lg-4 mb-4">
        <label class="form-label">Formador</label>
        <select name="teacher_id" class="form-control">
            @if(isset($teacher))
                <option value="{{ $teacher->id }}" selected>{{ $teacher->name }}</option>
            @else
            <option value="">Selecione um formador</option>
            @foreach($teachers as $item)
                <option value="{{ $item->id }}" {{ old('teacher_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
            @endif
        </select>
    </div>
    <div class="col-lg-4 mb-4">
        <label class="form-label">Estado</label>
        <select name="status" class="form-control">
            <option value="draft" {{ old('status', $course->status ?? 'draft') == 'draft' ? 'selected' : '' }}>Rascunho</option>
            <option value="published" {{ old('status', $course->status ?? 'published') == 'published' ? 'selected' : '' }}>Publicado</option>
        </select>
    </div>
    <div class="col-lg-4 mb-4">
        <label class="form-label">Preço</label>
        <input type="number" name="price" class="form-control" value="{{ old('price', $course->price ?? '5000.00') }}" step="0.01">
    </div>
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nível</label>
        <select name="level" class="form-control">
            <option value="beginner" {{ old('level', $course->level ?? 'beginner') == 'beginner' ? 'selected' : '' }}>Iniciante</option>
            <option value="intermediate" {{ old('level', $course->level ?? 'intermediate') == 'intermediate' ? 'selected' : '' }}>Intermediário</option>
            <option value="advanced" {{ old('level', $course->level ?? 'advanced') == 'advanced' ? 'selected' : '' }}>Avançado</option>
        </select>
    </div>
    <div class="col-lg-4 mb-4">
        <label class="form-label">Duração</label>
        <input type="text" name="duration" class="form-control" value="{{ old('duration', $course->duration ?? '') }}" placeholder="Ex: 10 horas">
    </div>
    <div class="col-lg-8 mb-4">
        <label class="form-label">Imagem (opcional) </label>
        <input type="file" name="image" class="form-control">
    </div>

    {{-- Descrição - descrevendo sobre o que se trata --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $course->description ?? '') }}</textarea>
    </div>

    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>

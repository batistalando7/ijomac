<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Título da Galeria</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $galery->name ?? '') }}" placeholder="Ex: Evento de Natal 2025" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Estado</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status', $galery->status ?? '') == '1' ? 'selected' : '' }}>Ativo</option>
                    <option value="0" {{ old('status', $galery->status ?? '') == '0' ? 'selected' : '' }}>Inativo</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea type="text" class="form-control" id="description" name="description"
                    placeholder="Ex: Evento de Natal 2025" required>{{ old('description', $galery->description ?? '') }}</textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="image">Imagens (Selecione várias - a primeira será a capa)</label>
                <!-- AJUSTE: name="images[]" e atributo multiple -->
                <input type="file" class="form-control" id="image" name="images[]" multiple accept="image/*"
                    >
                <small class="text-muted">Você pode selecionar vários arquivos de uma vez segurando Ctrl ou
                    Shift.</small>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
        </div>
    </div>
</div>
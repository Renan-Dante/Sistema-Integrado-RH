<div class="col-md-3">
    <label for="nome" class="form-label">Nome do Departamento</label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{ $departamento->nome ?? "" }}" required>
</div>
<div class="col-md-2">
<label for="status" class="form-label">Status</label>
<select id="status" name="status" class="form-select" required>
    <option value=""></option>
    <option value="on" @if(isset($departamento->status)) @selected($departamento->status == 'on') @endif>Ativo</option>
    <option value="off" @if(isset($departamento->status)) @selected($departamento->status == 'off') @endif>Desligado</option>
</select>
</div>

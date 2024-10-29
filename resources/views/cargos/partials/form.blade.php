<div class="col-md-3">
    <label for="descricao" class="form-label">Descriçao do Cargo</label>
    <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $cargo->descricao ?? "" }}" required>
</div>
<div class="col-md-2">
<label for="status" class="form-label">Status</label>
<select id="status" name="status" class="form-select" required>
    <option value=""></option>
    <option value="on" @if(isset($cargo->status)) @selected($cargo->status == 'on') @endif>Ativo</option>
    <option value="off" @if(isset($cargo->status)) @selected($cargo->status == 'off') @endif>Desligado</option>
</select>
</div>

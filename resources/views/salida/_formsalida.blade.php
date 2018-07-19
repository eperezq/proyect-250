



<label for="">Area</label>
<input type="text" name="Area" class="form-control" required
    value="{{old('Area',isset($id)? $id->Area : '')}}">
    <div class="invalid-feedback">
        Requiere Area
    </div>

<label for="">fecha de registro</label>
<input type="date" name="fechaRegistro" class="form-control" required
    value="{{old('fechaRegistro',isset($id)? $id->fechaRegistro : '')}}">
    <div class="invalid-feedback">
        Requiere fecha de registro
    </div>
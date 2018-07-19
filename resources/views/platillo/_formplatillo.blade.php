



<label for="">Descripcion</label>
<input type="text" name="descripcion" class="form-control" required
    value="{{old('descripcion',isset($id)? $id->descripcion : '')}}">

<label for="">Caracteristicas</label>
<input type="text" name="caracteristicas" class="form-control" required
    value="{{old('caracteristicas',isset($id)? $id->caracteristicas : '')}}">

<label for="">Presentacion</label>
<input type="text" name="Presentación" class="form-control" required
    value="{{old('Presentación',isset($id)? $id->Presentación : '')}}">






<div class="row">
    <div class="col-md-6">
            <label for="">Categoria</label>
            <input type="text" name="descripcion" class="form-control" required
                value="{{old('descripcion',isset($id)? $id->descripcion : '')}}">
                <div class="invalid-feedback">
                    Requiere Categoria
                </div>
    </div>
</div>

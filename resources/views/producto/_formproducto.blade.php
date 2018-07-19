
<div class="row">
    <div class="col-md-6">
        <label for="">Producto</label>
        <input type="text" name="descripcion" class="form-control" required
            value="{{old('descripcion',isset($id)? $id->descripcion : '')}}">
            <div class="invalid-feedback">
                Requiere Producto
            </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Presentacion</label>
                <input type="text" name="presentacion" class="form-control" required
                    value="{{old('presentacion',isset($id)? $id->presentacion : '')}}">
                    <div class="invalid-feedback">
                        Requiere Presentacion
                    </div>
            </div>
            <div class="col-md-6">
                <label for="">Unidad de medida</label>
                <input type="text" name="unidadMedida" class="form-control" required
                    value="{{old('unidadMedida',isset($id)? $id->unidadMedida : '')}}">
                    <div class="invalid-feedback">
                        Requiere Unidad de medida
                    </div>
            </div>
        </div>
        
        <label for="">Marca</label>
        <input type="text" name="marca" class="form-control" required
            value="{{old('marca',isset($id)? $id->marca : '')}}">
            <div class="invalid-feedback">
                Requiere Marca
            </div>
    </div>


    <div class="col-md-6">
        <label for="">Características</label>
        <input type="text" name="caracteristicas" class="form-control" required
            value="{{old('caracteristicas',isset($id)? $id->caracteristicas : '')}}">
            <div class="invalid-feedback">
                Requiere Características
            </div>

        <div class="row">
            <div class="col-md-5">
                <label for="">Stock Mínimo</label>
                <input type="number" name="stockMinimo" class="form-control" required
                    value="{{old('stockMinimo',isset($id)? $id->stockMinimo : '')}}">
                    <div class="invalid-feedback">
                        Requiere Stock Mínimo
                    </div>
            </div>
            <div class="col-md-5">
                <label for="">Stock en Almacen</label>
                <input type="number" name="stockAlmacen" class="form-control" required
                    value="{{old('stockAlmacen',isset($id)? $id->stockAlmacen : '')}}">
                    <div class="invalid-feedback">
                        Requiere Stock en Almacen
                    </div>
            </div>
            <div class="col-md-10">
                <label for="">Fecha de Vencimiento</label>
                <input type="date" name="fechaVencimiento" class="form-control" required
                    value="{{old('fechaVencimiento',isset($id)? $id->fechaVencimiento : '')}}">
                    <div class="invalid-feedback">
                        Requiere Fecha de Vencimiento
                    </div>
            </div>
        </div>
        
        
        
        
        
    </div>
</div>






        
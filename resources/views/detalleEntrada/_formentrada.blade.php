
<div class="row">
    <div class="col-md-6">
        <label for="">Proveedor</label>
        <select name="idProveedor" id="" class="select form-control">   
            @foreach($proveedores as $prove)
                <option value="{{$prove->idProveedor}}">{{$prove->razonSocial}}</option>
            @endforeach
        </select>

        <label for="">N° de documento</label>
        <input type="text" name="nroDocumento" class="form-control" required >
        <div class="invalid-feedback">
            Requiere N° de documento
        </div>

        <label for="">Serie</label>
        <input type="text" name="serie" class="form-control" required>
        <div class="invalid-feedback">
            Requiere N° de Serie
        </div>

        <label for="">Tipo de Comprobante</label>
        <select name="idTipoComp" id="" class="select form-control" >
                @foreach($tipocomprobantes as $compro)
                    <option value="{{$compro->idTipoComp}}">{{$compro->descripcion}}</option>
                @endforeach
                
        </select>

    </div>
    <div class="col-md-6">
        <label for="">Producto</label>
        <select name="idProducto" id="" class="select form-control">
                @foreach($productos as $pro)
                    <option value="{{$pro->idProducto}}">{{$pro->descripcion}}</option>
                @endforeach
        </select>

        <label for="">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" required>
        <div class="invalid-feedback">
            Requiere Cantidad
        </div>

        <label for="">Precio Unitario</label>
        <input type="number" name="precioUnitario" class="form-control" required>
        <div class="invalid-feedback">
            Requiere Precio Unitario
        </div>

        <label for="">Fecha de Vencimiento</label>
        <input type="date" name="fechaVencimiento" class="form-control" required>
        <div class="invalid-feedback">
            Requiere Fecha de Vencimiento
        </div>
    </div>
</div>




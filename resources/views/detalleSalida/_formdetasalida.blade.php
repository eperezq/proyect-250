<div class="row">
    <div class="col-md-6">
            <label for="">Area</label>
            <select name="idSalida" id="" class="form-control select">
                @foreach($salidas as $sali)
                        <option value="{{$sali->idSalida}}">{{$sali->Area}}</option>
                @endforeach
            </select>
            <label for="">Productos</label>
            <select name="idProducto" id="" class="form-control select">
                @foreach($productos as $pro)
                    <option value="{{$pro->idProducto}}">{{$pro->descripcion}}</option>
                @endforeach
            </select>
    </div>
    <div class="col-md-6">

            <label for="">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required>
            <div class="invalid-feedback">
                Requiere Cantidad
            </div>
        
            <label for="">Fecha de Salida</label>
            <input type="date" name="fechaSalida" class="form-control" required>
            <div class="invalid-feedback">
                Requiere Fecha de Salida
            </div>
            
    </div>
</div>



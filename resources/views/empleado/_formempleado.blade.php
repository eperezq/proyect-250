<div class="row">
    <div class="col-md-6"> 
            <div class="row">
                <div class="col-md-6">
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="appaterno" class="form-control" required
                        value="{{old('appaterno',isset($id)? $id->appaterno : '')}}" placeholder="ingrese apellido paterno">
                        <div class="invalid-feedback">
                            Requiere Apellido Paterno
                        </div>
                </div>
                <div class="col-md-6">
                    <label for="">Apellido Materno</label>
                    <input type="text"  name="apmaterno" class="form-control" required
                        value="{{old('apmaterno',isset($id)? $id->apmaterno : '')}}" placeholder="ingrese apellido materno">
                        <div class="invalid-feedback">
                            Requiere Apellido Materno
                        </div>
                </div>
            </div>

        <label for="">Nombres</label>
        <input type="text"  name="nombres" class="form-control" required
            value="{{old('nombres',isset($id)? $id->nombres : '')}}" placeholder="ingrese nombres">
            <div class="invalid-feedback">
                Requiere Nombres
            </div>

        <div class="row">
            <div class="col-md-6">
                <label for="">Documento</label>
                <input type="number" name="nroDocum" class="form-control" required
                    value="{{old('nroDocum',isset($id)? $id->nroDocum : '')}}" placeholder="ingrese documento">
                    <div class="invalid-feedback">
                        Requiere Documento
                    </div>
            </div>
            <div class="col-md-6">
                <label for="">fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" class="form-control" required
                    value="{{old('fechaNacimiento',isset($id)? $id->fechaNacimiento : '')}}" placeholder="ingrese fecha de nacimiento">
                    <div class="invalid-feedback">
                        Requiere Fecha
                    </div>
            </div>
        </div>   

        <label for="">Lugar de nacimiento</label>
        <input type="text"  name="lugarNacimiento"  class="form-control" required
            value="{{old('lugarNacimiento',isset($id)? $id->lugarNacimiento : '')}}" placeholder="ingrese lugar de nacimiento">
            <div class="invalid-feedback">
                Requiere Lugar de nacimiento
            </div>

        <label for="">Direccion</label>
        <input type="text"  name="direccion" class="form-control" required
            value="{{old('direccion',isset($id)? $id->direccion : '')}}" placeholder="ingrese direccion">
            <div class="invalid-feedback">
                Requiere Direccion
            </div>

 
    </div>




    <div class="col-md-6">

        <div class="row">
            <div class="col-md-12">
            <label for="">Correo electronico 1</label>
                <input type="email" name="email" class="form-control" required
                    value="{{old('email',isset($id)? $id->email : '')}}" placeholder="ingrese email">
                    <div class="invalid-feedback">
                        Requiere E-mail
                    </div>

                <label for="">Correo electronico 2 <span class="red-text">(opciomal)</span></label>
                <input type="email" name="email2" class="form-control"
                    value="{{old('email2',isset($id)? $id->email2 : '')}}"  placeholder="ingrese email(opcional)">
                    
            </div>
            <div class="col-md-12">
                <label for="">Telefono 1 </label> 
                    <input type="number" name="telefono1" class="form-control" required
                        value="{{old('telefono1',isset($id)? $id->telefono1 : '')}}"  placeholder="ingrese telefono">
                        <div class="invalid-feedback">
                            Requiere Teléfono
                        </div>

                    <label for="">Telefono 2 <span class="red-text">(opciomal)</span></label>
                    <input type="number" name="telefono2" class="form-control"
                        value="{{old('telefono2',isset($id)? $id->telefono2 : '')}}"  placeholder="ingrese telefono">
                        

            </div>
            
                 
        
         
        </div>
    </div>
</div>
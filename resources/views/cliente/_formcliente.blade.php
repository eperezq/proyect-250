
<div class="row">
    <div class="col-md-6">
        <label for="">Razon Social</label>
        <input type="text" name="razonSocial" class="form-control" required
            value="{{old('razonSocial',isset($id)? $id->razonSocial : '')}}">
            <div class="invalid-feedback">
                Requiere Razon Social
            </div>
        
        <label for="">Dirección</label>
        <input type="text" name="direccion" class="form-control" required
            value="{{old('direccion',isset($id)? $id->direccion : '')}}">
            <div class="invalid-feedback">
                Requiere Dirección
            </div>            
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for="">telefono 1</label>
                <input type="text" name="telefono1" class="form-control" required
                    value="{{old('telefono1',isset($id)? $id->telefono1 : '')}}">
                    <div class="invalid-feedback">
                        Requiere telefono
                    </div>  
                
                <label for="">telefono 2</label>
                <input type="text" name="telefono2" class="form-control" 
                    value="{{old('telefono2',isset($id)? $id->telefono2 : '')}}">
            </div>
            <div class="col-md-12">
                <label for="">Correo eléctronico</label>
                <input type="text" name="email" class="form-control" required
                    value="{{old('email',isset($id)? $id->email : '')}}">
                    <div class="invalid-feedback">
                        Requiere Correo eléctronico
                    </div>  
                
                <label for="">Correo eléctronico</label>
                <input type="text" name="email2" class="form-control" 
                    value="{{old('email2',isset($id)? $id->email2 : '')}}">
            </div>
        </div>
    </div>
</div>





{{--  --}}
{{-- departamento,provincia,distrito, --}}
{{-- <label for="">Correo eléctronico</label>
<input type="text" name="email2" value="{{old('email2',isset($id)? $id->email2 : '')}}">                                                                                                                                                                                --}}


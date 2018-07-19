
 <div class="modal fade" id="modalEmpleado" tabindex="-1" role="dialog" aria-labelledby="modalEmpleado" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title black-text sise-t-18 b-01" id="modalEmpleado">Agregar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('crearempleados')}}" method="post" name="formdist" id="needs-validation" novalidate>
                <div class="modal-body">
                        
                            {{csrf_field()}} 
                            @include('empleado/errores._errorsempleado')
                            @include('empleado._formempleado')
                            <div class="row">
                            <div class="col-md-6">
                                <label for="">Cargo</label>
                                <select name="idCargo" id="" class="custom-select select">
                                    @foreach($cargos  as $cargo)
                                        <option value="{{$cargo->idCargo}}">{{$cargo->descripcion}}</option>
                                        
                                    @endforeach
                                </select>
                                <br>
                            </div>
                            </div>
                </div>
                <div class="modal-footer">
                        <button class="btn btn-info" type="submit">Crear</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form> 
        </div>
    </div>
</div>






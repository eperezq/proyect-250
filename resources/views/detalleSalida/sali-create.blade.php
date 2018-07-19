

 <div class="modal fade" id="modalDSalida" tabindex="-1" role="dialog" aria-labelledby="modalasd" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title black-text sise-t-18 b-01" id="modalDSalida"> Salida </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{route('creardetasalida')}}" method="post" name="formdist" id="needs-validation" novalidate>
                        <div class="modal-body">
                                
                                {{csrf_field()}} 
                                @include('detalleSalida._formdetasalida')
        
                        </div>
                        <div class="modal-footer">
                                <button class="btn btn-info" type="submit">Crear</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                </form> 
                </div>
        </div>
</div>
              


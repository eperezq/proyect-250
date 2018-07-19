
 
 <!--modal-->
 <div class="modal fade" id="modalComprobante" tabindex="-1" role="dialog" aria-labelledby="modalEmpleado" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title black-text sise-t-18 b-01" id="modalComprobante">Agregar comprobante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('comprobantecreate')}}" method="post" name="formdist" id="needs-validation" novalidate>
                <div class="modal-body">
                        
                            {{csrf_field()}} 
                            @include('comprobante._formcomprobante')
                            
                </div>
                <div class="modal-footer">
                        <button class="btn btn-info" type="submit">Crear</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form> 
        </div>
    </div>
</div>


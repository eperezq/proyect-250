

 <!-- Modal -->
 <div class="modal fade" id="modalProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title black-text sise-t-18 b-01" id="modalProveedor">Agregar Proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/crearproveedor" method="post" name="formdist" id="needs-validation" novalidate>
                    <div class="modal-body">
                            
                                {{csrf_field()}} 
                                @include('proveedor/errores._errorsproveedor')
                                @include('proveedor._formproveedor')
                             
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-info" type="submit">Crear</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>


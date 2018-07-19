
 <!-- Modal -->
 <div class="modal fade" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title black-text sise-t-18 b-01" id="modalProducto">Agregar Proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('productocreate')}}" method="post" name="formdist" id="needs-validation" novalidate>
                    <div class="modal-body">
                            
                                {{csrf_field()}} 
                                @include('producto/errores._errorsproducto')
                                @include('producto._formproducto')
                                <div class="row">
                                        <div class="col-md-6">
                                                <label for="">Categoria</label>
                                                <select name="idCategoria" id=""  class="custom-select select">
                                                    @foreach($categorias as $cate)
                                                <option value="{{$cate->idCategoria}}">{{$cate->descripcion}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="col-md-6">
                                                
                                        </div>
                                        
                                    </div>
                             
                    </div>
                    <div class="modal-footer">
                            <div class="">
                                    <button class="btn btn-info" type="submit">Crear</button>
                                </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>


{{--     
        <form action="{{route('productocreate')}}" method="post" name="formdist" id="needs-validation" novalidate>
            {{csrf_field()}} 
            @include('producto/errores._errorsproducto')
            @include('producto._formproducto')
            <div class="row">
                <div class="col-md-6">
                        <label for="">Categoria</label>
                        <select name="idCategoria" id=""  class="custom-select select">
                            @foreach($categorias as $cate)
                        <option value="{{$cate->idCategoria}}">{{$cate->descripcion}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="col-md-6">
                        <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                            <button class="btn btn-info" type="submit">Crear</button>
                        </div>
                </div>
                
            </div>

        </form> --}}


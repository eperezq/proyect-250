@extends('componentes/nav')

@section('content')
@include('success._succes')

<?php
$i = 1;

?>



    <div class="card">
            
        <div class="card-body ">
                

            <h5 class="card-title b-01 sise-t-18 black-text">Tabla de Producto</h5>
            <div class="linea"></div>
                <div class="row pb-4 pt-4">
                    <div class="col-md-4 ">
                            <label for="" class="">Busqueda</label>
                            <div class="">
                                    <input type="text"  class="form-control redondear" id="search" placeholder="Escribe">
                            </div>
                            
                    </div>
                    <div class="col-md-4 text-center">
                           
                    </div>
                    <div class="col-md-4 mt-2">
                            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalProducto">
                                    <i class="fas fa-sign mr-2"></i>
                                    Agregar
                            </button>
                    </div>
                </div>
            

            <div class="table-responsive">
                <table class="table table-bordered-01" id="table">
                    <thead class="text-center">
                        <tr>
                            <th>N° </th>
                            <th>Producto</th>
                            <th>Presentacion</th>
                            <th>Unidad de Medida</th>
                            <th>Marca</th>
                            <th>Caracteristicas</th>
                            <th>Stock Minimo</th>
                            <th>Estado Stock</th>
                            <th>
                                 Stock en Almacen         
                            </th>
                            <th>Fecha de Vencimiento</th>
                            <th>Categoria</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead>
                    <tbody >
                            @foreach($productos as $product)
                        <tr>
                            
                            <td>{{$i++}}</td>
                            <td>{{$product->descripcion}}</td>
                            <td>{{$product->presentacion}}</td>
                            <td>{{$product->unidadMedida}}</td>
                            <td>{{$product->marca}}</td>
                            <td>{{$product->caracteristicas}}</td>
                            <td class="text-center">{{$product->stockMinimo}}</td>
                            <td class="">
                                @if ($product->stockAlmacen<=($product->stockMinimo))
                                    <p style=" background:red;">
                                        <span id="alert-pro" style="display: none;">
                                            17
                                        </span>
                                    </p>
                                    @if ($product->stockAlmacen < 1)
                                    <div class='progress-bar-holder sm-02'>
                                            <div class='progress-bar'>
                                                  0%
                                            </div>
                                          </div>
                                      
                                    @else
                                    <div class='progress-bar-holder sm-02'>
                                        <div class='progress-bar red black-text'>
                                                20%
                                        </div>
                                    </div>

                                    @endif

                                @elseif($product->stockAlmacen<=($product->stockMinimo)+10)
                                    <div class='progress-bar-holder sm-02'>
                                        <div class='progress-bar orange'>
                                               50%
                                        </div>
                                    </div>
                         
                                @else
                                    <div class='progress-bar-holder sm-02'>
                                        <div class='progress-bar green'>
                                               85%
                                        </div>
                                    </div>
                               
                                @endif
                            </td>
                            
                         

                                @if ($product->stockAlmacen<=($product->stockMinimo))
                                 
                                <td class="text-center b-01 sm-02 ">
                                        {{$product->stockAlmacen}}

                                        <div class="alerta red white-text sise-t-18 animated flash infinite" id="yourElement" 
                                            style=" padding: 5px;
                                                    left: 200px; 
                                                    width: 120px;
                                                    height: auto; 
                                                    position: absolute; 
                                                    top: 18px; 
                                                    z-index: 120;">
                                             Escaseando
                                        </div>
                                </td>
                                  
                                @else
                                <td class="text-center b-01 sm-02">
                                        {{$product->stockAlmacen}}
                                    </td>
                                @endif
                                    
                          

                            <td>{{$product->fechaVencimiento}}</td>
                            <td>{{$product->categoria->descripcion}}</td>
                            
                            <td class="text-center sm-02">
                                
                                    <a href="producto/{{$product->idProducto}}/editar" class="white-text">
                                        <button class="btn green btn-sm b-01 sm-02">
                                            Editar
                                        </button>
                                    </a>
                             
                            </td>
                                <form action="producto/{{$product->idProducto}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            <td class="text-center sm-02">


                                
                                    <!--Modal: modalConfirmDelete-->
                                    <div class="modal fade" id="modal{{$product->idProducto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                                            <!--Content-->
                                            <div class="modal-content text-center">
                                                <!--Header-->
                                                <div class="modal-header d-flex justify-content-center">
                                                    <p class="heading">
                                                            ¿Estás seguro?</p>
                                                </div>
                                    
                                                <!--Body-->
                                                <div class="modal-body">
                                    
                                                    <i class="fa fa-times fa-4x animated rotateIn"></i>
                                    
                                                </div>
                                    
                                                <!--Footer-->
                                                <div class="modal-footer flex-center">
                                                   
                                                    <button type="submit" class="btn  btn-outline-danger">Si</button>  
                                                    <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
                                                </div>
                                            </div>
                                            <!--/.Content-->
                                        </div>
                                    </div>
                                    <!--Modal: modalConfirmDelete-->
                                        
                                    <div class="text-center">
                                        <a href="" class="btn red btn-sm b-01 sm-02 white-text" data-toggle="modal" data-target="#modal{{$product->idProducto}}">eliminar</a>
                                    </div>
                            </td>
                                </form>
                        </tr>   
                        @endforeach

                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">{{$productos->links()}}</div>
        
    </div>


    @include('producto.produ-create')

@endsection
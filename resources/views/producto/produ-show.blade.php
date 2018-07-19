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
                            <th>
                                <div class="row sm-02">
                                    <div class="col-md-8">
                                            Stock en Almacen 
                                    </div>
                                    <div class="col-md-4 red sm-02 v-centro white-text">Alert</div>
                                </div>
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
                            <td>{{$product->stockMinimo}}</td>
                            <td>
                                        {{$product->stockAlmacen}}
                                            @if ($product->stockAlmacen<= ($product->stockMinimo))
                                                <span class="ml-4 badge badge-pill red ">escaso </span>
                                            
                                            @else
                                                <span class="ml-4 badge badge-pill green "> bueno </span>
                                            @endif 
                            </td>
                            <td>{{$product->fechaVencimiento}}</td>
                            <td>{{$product->categoria->descripcion}}</td>
                            
                            <td class="text-center sm-02">
                                <button class="btn green btn-sm b-01 sm-02">
                                    <a href="producto/{{$product->idProducto}}/editar" class="white-text">Editar</a>
                                </button>
                            </td>
                                <form action="producto/{{$product->idProducto}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            <td class="text-center sm-02">
                                <button type="submit" class="btn red btn-sm b-01 sm-02">eliminar</button>
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
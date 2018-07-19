
@extends('componentes/nav')

@section('content')
@include('success._succes')

<?php
$i = 1;
?>


<div class="card">
        <div class="card-body">
                <h5 class="card-title b-01 sise-t-18 black-text">Tabla Platillo</h5>
                <div class="linea"></div>
                    <div class="row pb-4 pt-4">
                        <div class="col-md-4 ">
                            <label for="" class="">Busqueda</label>
                            <div class="">
                                    <input type="text"  class="form-control redondear" id="search" placeholder="Escribe">
                            </div>
                        </div>
                        <div class="col-md-4 text-center"></div>
                        <div class="col-md-4 mt-2">
                            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalPlatos">
                                <i class="fas fa-sign mr-2"></i>
                                Agregar
                            </button>
                        </div>
                    </div>
            <div class="table-responsive"> 
                <table class="table table-bordered-01" id="table">
                    <thead>
                        <tr class="text-center">
                            <th>N° </th>
                            <th>Descripcion </th>
                            <th>Caracteristicas</th>
                            <th>Presentacion</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($platillos as $pla)
                            <td class="text-center">{{$i++}}</td>
                            <td>{{$pla->descripcion}}</td>
                            <td>{{$pla->caracteristicas}}</td>
                            <td>{{$pla->Presentación}}</td>
                            
                            
                            <td class="text-center">
                                <a href="platillo/{{$pla->idPlatillo}}/editar" class="white-text">
                                    <button class="btn green btn-sm b-01 sm-02">
                                        Editar
                                    </button>
                                </a>
                            </td>
                                <form action="platillo/{{$pla->idPlatillo}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            <td class="text-center">
                                <button type="submit" class="btn red btn-sm b-01 sm-02">eliminar</button>
                            </td>
                                </form>
                        </tr>
                                @endforeach
                    </tbody>

                </table>
            </div>
            <div class="d-flex justify-content-center">{{$platillos->links()}}</div>
        </div>
</div>
    
    
@include('platillo.plati-create')

@endsection
    
    
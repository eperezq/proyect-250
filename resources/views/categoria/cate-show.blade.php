
@extends('componentes/nav')

@section('content')
@include('success._succes')

<?php
$i = 1;
?>

<div class="card">
    <div class="card-body">
            <h5 class="card-title b-01 sise-t-18 black-text">Tabla de Categoría</h5>
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
                            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalCategoria">
                                <i class="fas fa-sign mr-2"></i>
                                Agregar
                            </button>
                    </div>
                </div>

        <div class="table-responsive">
            <table class="table table-bordered-01" id="table">
                <thead class="text-center">
                    <tr>
                        <th class="text-center">N° </th>
                        <th>Categoria</th>
                        <th colspan="2">Opciones</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($categorias as $cat)
                        <td class="text-center">{{$i++}}</td>
                        <td>{{$cat->descripcion}}</td>
                        
                        <td class="text-center">
                            <a href="categoria/{{$cat->idCategoria}}/editar" class="white-text">
                                <button class="btn green btn-sm b-01 sm-02">
                                    Editar
                                </button>
                            </a>
                        </td>
                        
                            <form action="categoria/{{$cat->idCategoria}}" method="post">
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
    </div>
</div>
@include('categoria.cate-create')

@endsection

    
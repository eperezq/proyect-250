
@extends('componentes/nav')

@section('content')
@include('success._succes')
<?php
$i = 1;
?>

<div class="card">
    <div class="card-body">
            <h5 class="card-title b-01 sise-t-18 black-text">Tabla Empleado</h5>
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
                        <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalEmpleado">
                                <i class="fas fa-sign mr-2"></i>
                                Agregar
                        </button>
                    </div>
                </div>
        
        <div class="table-responsive">
            <table class="table table-bordered-01" id="table" >
                <!-- <table id="zero_config" class="table table-striped table-bordered"> -->
                <thead class="text-center">
                    <tr >
                        <th>N° </th>
                        <th>Apellidos paternos</th>
                        <th>Apellidos maternos</th>
                        <th>Nombres</th>
                        <th>Cargo</th>
                        <th colspan="2">Opciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $car)
                    <tr class="black-text">
                        <td class="text-center">{{$i++}}</td>
                        <td>{{$car->appaterno}}</td>
                        <td>{{$car->apmaterno}}</td>
                        <td>{{$car->nombres}}</td>
                        <td class="text-center">{{$car->cargo->descripcion}}</td>
                        <td class="text-center sm-02" >
                           
                            <a href="editarempleado/{{$car->idEmpleado}}/editar" class="white-text">
                                <button class="btn green btn-sm b-01 sm-02">
                                Editar
                                </button>
                            </a>
                          
                        </td>
                            <form action="/{{$car->idEmpleado}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                        <td class="text-center sm-02">
                            <button type="submit" class="btn red btn-sm b-01 sm-02" >eliminar</button>
                        </td>
                            </form>
                     @endforeach    
                    </tr>
                   
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">{{$empleados->links()}}</div>
    </div>
</div>

@include('empleado.emple-create')


@endsection







@extends('componentes/nav')

@section('content')
@include('success._succes')
<?php
$i = 1;
?>

<div class="card">
    <div class="card-body">
            <h5 class="card-title b-01 sise-t-18 black-text">Tabla Detalle Salida</h5>
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
                            <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalDSalida">
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
                        <th>Area</th>
                        <th>Producto</th>
                        <th>cantidad</th>
                        <th>Fecha de Salida</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($detallessa as $sali)
                        <td class="text-center">{{$i++}}</td>
                        <td>{{$sali->salida->Area}}</td>
              
                        <td class="text-center">{{$sali->cantidad}}</td>
                        <td class="text-center">{{$sali->fechaSalida}}</td>
                        
                        {{-- <td><button ><a href="editarempleado/{{$car->idEmpleado}}/editar">Editar</a></button></td>
                        <form action="/{{$car->idEmpleado}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <td><button type="submit" >eliminar</button></td>
                        </form> --}}
                    </tr>
                        @endforeach
                </tbody>
                
               

            </table>
        </div>
    </div>

      @include('detalleSalida.sali-create')
</div>



@endsection


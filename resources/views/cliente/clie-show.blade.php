@extends('componentes/nav')

@section('content')

@include('success._succes')
<?php
$i = 1;
?>



    <div class="card">
        <div class="card-body">
                <h5 class="card-title b-01 sise-t-18 black-text">Tabla Cliente</h5>
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
                                <button type="submit" class="btn blue b-01 sm-02 float-right" data-toggle="modal" data-target="#modalCliente">
                                        <i class="fas fa-sign mr-2"></i>
                                        Agregar
                                </button>
                        </div>
                    </div>
            
            <div class="table-responsive">
                <table class="table table-bordered-01" id="table">
                    <thead class="text-center">
                        <tr class="text-center">
                            <th>N° </th>
                            <th>Cliente</th>
                            <th>Dirección</th>
                            <th>Correo Eléctronico</th>

                            <th>Teléfono</th>
                            
                            <th>Departamento</th>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th colspan="2">Opciones</th> 
                        </tr>
                    </thead> 
                    <tbody> 
                        @foreach($clientes as $clie)
                        <tr class="black-text">
                            
                            <td class="text-center">{{$i++}}</td>
                            <td>{{$clie->razonSocial}}</td>
                            <td>{{$clie->direccion}}</td>

                            <td>
                                <i class="far fa-envelope mr-2"></i>
                                {{$clie->email}} <br>

                                @if ($clie->telefono2==!null)
                                <i class="far fa-envelope mr-2"></i>
                                {{$clie->email2}}
                                @endif
                                
                            </td>
                            
                            <td>
                                <i class="fas fa-phone-volume mr-2"></i>
                                {{$clie->telefono1}}<br>  
                            
                                @if ($clie->telefono2==!null)
                                <i class="fas fa-phone-volume mr-2"></i>
                                {{$clie->telefono2}}
                                @endif

                                
                            </td>
                           
                            <td>{{$clie->departamento}}</td>
                            <td>{{$clie->provincia}}</td>
                            <td>{{$clie->distrito}}</td>
                        
                            
                            <td class="text-center">
                                
                                    <a href="cliente/{{$clie->idCliente}}/editar" class="white-text">
                                        <button class="btn green btn-sm b-01 sm-02">
                                            Editar
                                        </button>
                                    </a>
                                
                            </td>

                                <form action="cliente/{{$clie->idCliente}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
                            <td class="text-center">
                                <button type="submit" class="btn red btn-sm b-01 sm-02" >eliminar</button>
                            </td>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
    @include('cliente.clie-create')
    
@endsection
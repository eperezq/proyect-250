
@extends('componentes/nav')

@section('content')



<div class="container10 mt-4">
        <div class="card ">
            <div class="card-body">
                    <h5 class="card-title b-01 sise-t-18 black-text">Editar Empleado</h5>
                    <div class="linea"></div>
                        <form action="/{{$id->idEmpleado}}" method="post" id="needs-validation" class="pt-4" novalidate>
                            {{method_field('Patch')}}
                            {{csrf_field()}}
                            @include('empleado/errores._errorsempleado')
                            @include('empleado._formempleado')

                            <div class="row">
                        
                                <div class="col-md-6">
                                    <label for="">Cargo</label>
                                    <select name="idCargo" id="" class="custom-select select ">
                                        <option value="{{$id->cargo->idCargo}}">{{$id->cargo->descripcion}}</option>
                                        @foreach($cargos as $car)
                                        <option value="{{$car->idCargo}}">{{$car->descripcion}}</option>
                                        @endforeach
                                    </select>
                                
                                </div>

                                <div class="col-md-6">
                                    <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                                        <button class="btn btn-info" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
            </div>

        </div>
</div>
@endsection
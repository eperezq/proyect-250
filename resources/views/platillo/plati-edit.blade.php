

@extends('componentes/nav')

@section('content')


<div class="container10 mt-4">
        <div class="card ">
            <div class="card-body">
                    <h5 class="card-title b-01 sise-t-18 black-text">Editar Platillo</h5>
                    <div class="linea"></div>
                        <form action="/platillo/{{$id->idPlatillo}}" method="post" class="pt-4">
                            {{method_field('Patch')}}
                            {{csrf_field()}}
                            {{-- @include('platillo/errores._errorsplatillo') --}}
                            <div class="row">
                                <div class="col-md-6">
                                    @include('platillo._formplatillo')
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6 text-center">
                                        <div class=" text-center mt-4">
                                            <button class="btn btn-info" type="submit">Actualizar</button>
                                        </div>
                                </div>
                            </div>
                        

                        </form>
            </div>

        </div>
</div>
        

@endsection
@extends('componentes/nav')

@section('content')

<div class="container10 mt-4">
        <div class="card ">
            <div class="card-body">
                    <h5 class="card-title b-01 sise-t-18 black-text">Editar Comprobante</h5>
                    <div class="linea"></div>

                    <form action="/cliente/{{$id->idCliente}}" method="post" id="needs-validation" class="pt-4" novalidate>
                        {{method_field('Patch')}}
                        {{csrf_field()}}
                        @include('cliente/errores._errorscliente')
                        @include('cliente._formcliente')

                        

                        <div class="col-md-12">
                            <div class="col-lg-12 col-sm-12 col-12 text-center mt-4">
                                <button class="btn btn-info" type="submit">Actualizar</button>
                            </div>
                        </div>
                    </form>

            </div>

        </div>
</div>
                          

@endsection
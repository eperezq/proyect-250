


@extends('componentes/nav')

@section('content')
<div class="container10 mt-4">
        <div class="card ">
            <div class="card-body">
                    <h5 class="card-title b-01 sise-t-18 black-text">Editar Comprobante</h5>
                    <div class="linea"></div>

                    <form action="/comprobante/{{$id->idTipoComp}}" method="post" class="pt-4">
                        {{method_field('Patch')}}
                        {{csrf_field()}}
                        {{-- @include('categoria/errores._errorscategoria') --}}

                        

                        <div class="row">
                                <div class="col-md-6">
                                    @include('comprobante._formcomprobante')
                                </div>
                                <div class="col-md-6">
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
@extends('adminlte::page')

@section('title', 'Camionetas - Ver Camioneta')

@section('content_header')
    <h1></h1>
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h5>{{ __('Ver') }} Camioneta</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('camiones.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $camione->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $camione->marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

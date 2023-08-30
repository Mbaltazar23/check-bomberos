@extends('adminlte::page')

@section('title', 'Herramientas - Ver Registro')

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
                            <h5><span class="card-title">{{ __('Ver') }} Registro</span></h5>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listas.index') }}"> {{ __('Volver al inicio') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Herramienta:</strong>
                            {{ $lista->herramienta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Camioneta:</strong>
                            {{ $lista->camione->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Checkeado:</strong>
                            {!! $lista->check !== 0
                                ? '<span class="badge badge-success">Checkeado</span>'
                                : '<span class="badge badge-danger">No Checkeado</span>' !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

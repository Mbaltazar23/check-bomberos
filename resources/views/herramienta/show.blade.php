@extends('adminlte::page')

@section('title', 'Herramientas - Ver Herramienta')

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
                            <span class="card-title">
                                <h5>{{ __('Ver') }} Herramienta</h5>
                            </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('herramientas.index') }}">
                                {{ __('Volver al inicio') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $herramienta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $herramienta->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

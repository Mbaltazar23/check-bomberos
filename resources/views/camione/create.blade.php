@extends('adminlte::page')

@section('title', 'Camionetas - Crear Camioneta')

@section('content_header')
    <h1>Nueva Camioneta</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Camione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('camiones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('camione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

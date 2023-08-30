@extends('adminlte::page')

@section('title', 'Herramientas - Crear Herramienta')

@section('content_header')
    <h1>Nueva Herramienta</h1>
@stop

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">

                <div class="card-body">
                    <form method="POST" action="{{ route('herramientas.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('herramienta.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop


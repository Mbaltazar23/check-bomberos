@extends('adminlte::page')

@section('title', 'Lista de Checkeos - Nuevo Registro')

@section('content_header')
    <h1>Nuevo Registro</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Lista</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('listas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lista.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('title', 'Camionetas - Actualizar Camioneta')

@section('content_header')
    <h1>Actualizar Camioneta</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('camiones.update', $camione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('camione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Herramienta') }}
            {{ Form::select('herramienta_id', $herramientas, $lista->herramienta_id, ['class' => 'form-control' . ($errors->has('herramienta_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una herramienta']) }}
            {!! $errors->first('herramienta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Camioneta') }}
            {{ Form::select('camioneta_id', $camiones, $lista->camioneta_id, ['class' => 'form-control' . ($errors->has('camioneta_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una camioneta']) }}
            {!! $errors->first('camioneta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <div class="form-check">
                {{ Form::checkbox('check', 1, $lista->check, ['class' => 'form-check-input' . ($errors->has('check') ? ' is-invalid' : '')]) }}
                {{ Form::label('check', 'Checkeado ?', ['class' => 'form-check-label']) }}
            </div>
            {!! $errors->first('check', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route('listas.index') }}" class="btn btn-danger">Cancelar</a>
    </div>
</div>

@extends('base')
@section('content')
{!! Form::open(array('url' => $url)) !!}
<div class="form-group">
    {!! Form::label('title', 'Tema:') !!}
    {!! Form::text('tema', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Capacitador:') !!}
    {!! Form::select('capacitador', $capacitadores, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Fecha de Capacitacion:') !!}
    {!! Form::date('date_training', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>
<div>{!! Form::submit('Enviar') !!}</div>
{!! Form::close() !!}
@stop
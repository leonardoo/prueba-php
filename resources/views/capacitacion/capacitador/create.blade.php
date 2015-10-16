@extends('base')
@section('content')
{!! Form::open(array('url' => 'capacitador')) !!}
<div class="form-group">
    {!! Form::label('title', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Identificacion:') !!}
    {!! Form::text('identification', null, ['class' => 'form-control']) !!}
</div>
<div>{!! Form::submit('Enviar') !!}</div>
{!! Form::close() !!}
@stop
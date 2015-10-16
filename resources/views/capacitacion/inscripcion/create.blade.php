@extends('capacitacion.capacitador.create')
@section('additional-fields')
<div class="form-group">
    {!! Form::label('title', 'Fecha de inscripcion:') !!}
    {!! Form::date('inscripcion', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Capacitacion:') !!}
    {!! Form::select('capacitacion', $capacitaciones, ['class' => 'form-control']) !!}
</div>
@stop
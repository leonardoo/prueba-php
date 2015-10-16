@extends('list')
@section('list')
    @foreach ($list as $obj)
        <tr>
            <td>{{$obj->name}}</td>
            <td>{{$obj->identification}}</td>
            <td>{{$obj->inscripcion}}</td>
            <td>{{$obj->capacitacion_id}}</td>
        </tr>
    @endforeach
@overwrite
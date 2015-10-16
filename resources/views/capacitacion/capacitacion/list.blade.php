@extends('list')
    @section('list')
        @foreach ($list as $obj)
            <tr>
                <td>{{$obj->tema}}</td>
                <td>{{$obj->date_training}}</td>
                <td>{{$obj->capacitador_id}}</td>
                <td>{{$obj->created_at}}</td>
                <td><a href="{{ route("capacitacion.show", ['id'=>$obj->id]) }}">Asistencia</a></td>
            </tr>
        @endforeach
    @endsection

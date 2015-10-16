@extends('base')
@section('content')
    <table>
        <tr>
            @foreach ($table as $th)
                <th>
                    {{$th}}
                </th>
            @endforeach
        </tr>
        @foreach ($list as $obj)
            <tr>
                <td>{{$capacitacion->tema}}</td>
                <td>{{$obj->name}}</td>
                <td>{{$obj->identification}}</td>
                <td>
                    @if ($obj->confirmed === 1)
                        Asistio
                    @else
                        No ha asistido
                    @endif
                </td>
                <td>
                    @if ($obj->confirmed === 0)
                        <a href="{{ route("inscripcion_confirm", ['id'=>$obj->id]) }}">Confirmar</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
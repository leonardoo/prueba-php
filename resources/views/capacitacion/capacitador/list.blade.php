@extends('list')
@section('list')
    @foreach ($list as $obj)
        <tr>
            <td>{{$obj->name}}</td>
            <td>{{$obj->identification}}</td>
        </tr>
    @endforeach
@endsection
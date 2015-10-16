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
        @yield('list')
    </table>
@stop
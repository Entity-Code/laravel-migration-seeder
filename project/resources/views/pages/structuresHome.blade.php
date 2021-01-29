@extends('layouts.main-layout');

@section('content')

    <h1>Structures:</h1>
    
    <ul>
        @foreach ($structures as $structure)
            <li>
                <a href="{{route('structure-profile', $structure -> id)}}">
                    {{$structure -> name}} 
                </a> 
            </li>
            <br>
        @endforeach
    </ul>

@endsection    
@extends('layouts.main-layout')

@section('content')

    <h1>Workers: </h1>
    
    <ul>
        @foreach ($workers as $worker)

        <li>
            <a href="{{ route('worker-profile', $worker -> id) }}">
                {{$worker -> name}} <br>                    
            </a>
        </li>
        <br>
        
        @endforeach
    </ul>
    

@endsection
@extends('layouts.main-layout')

@section('content')

    <h1>Brands:</h1>

    <ul>
        {{-- $brand è un'istanza dell'object Mark --}}

        @foreach ($brands as $brand) 
            <li>
                <a href="{{ route('brand-show', $brand -> id) }}">
                    {{ $brand -> name }}
                </a>
            </li>
            <br>
        @endforeach
    </ul>

@endsection
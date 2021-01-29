@extends('layouts.main-layout')

@section('content')

    <h2>BRAND ({{$brand -> id}})</h2>

    <h1>
        {{ $brand -> id }}
        {{ $brand -> name }}: 
        {{ $brand -> structures_number }} 
    </h1>

    <img src="{{ $brand -> logo_url }}">

@endsection 
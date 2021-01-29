@extends('layouts.main-layout')

@section('content')

    <h2>WORKER ({{$worker -> id}})</h2>

    <p>
        Id: {{$worker -> id}} <br>
        Name: {{$worker -> name}} <br> 
        Lastname: {{$worker -> lastname}} <br>        
        Hire date: {{$worker -> hire_date}}
    </p>

@endsection
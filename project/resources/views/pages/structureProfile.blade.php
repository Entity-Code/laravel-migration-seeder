@extends('layouts.main-layout')

@section('content')

    <h2>STRUCTURE ({{$structure -> id}})</h2>
    
    <p>
        <strong>• Name: </strong> 
        {{$structure -> name}} <br>

        <strong>• Address: </strong> 
        {{$structure -> address}} <br>

        <strong>• Workers number: </strong>
        {{$structure -> workers_number}}
    </p>
           
    

@endsection 
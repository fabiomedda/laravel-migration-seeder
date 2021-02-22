@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-5">Department</h1>
    @foreach($department as $dep)
    <div class="my-5">
        <h2>Name: {{$dep->name}}</h2>
        <h3>Typology: {{$dep->typology}}</h3>
    </div>
    @endforeach
</div>

@endsection
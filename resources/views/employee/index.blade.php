@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-5">Employee</h1>
    @foreach($employee as $emp)
    <div class="my-5">
        <h2>Name: {{$emp->fullname}}</h2>
        <h3>Role: {{$emp->role}}</h3>
    </div>
    @endforeach
</div>

@endsection
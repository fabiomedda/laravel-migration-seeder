@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-5">Company</h1>
    @foreach($company as $com)
    <div class="my-5">
        <h2>Name: {{$com->name}}</h2>
        <h3>Sector: {{$com->sector}}</h3>
    </div>
    @endforeach
</div>

@endsection
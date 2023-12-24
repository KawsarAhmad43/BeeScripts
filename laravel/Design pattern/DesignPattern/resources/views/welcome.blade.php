@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="container text-center">
        <h1>Design Patterns</h1>
        <ul>
            <li><a href="{{ route('builder.index') }}">Builder Pattern</a></li>
            <li><a href="#">Factory Pattern</a></li>
            <li><a href="#">Singleton Pattern</a></li>
            <li><a href="#">Repository Pattern</a></li>
            <li><a href="#">Resource Pattern</a></li>
        </ul>
    </div>
@endsection
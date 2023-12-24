
@extends('layouts.master')

@section('title', 'Index Page')

@section('content')
<a href="{{ route('builder.index') }}" class="btn btn-primary">Back</a>
<div class="container">
    
    <p><b>Name:</b> {{ $contact->name }}</p>
    <p><b>Age:</b> {{ $contact->age }}</p>
    <p><b>Email:</b> {{ $contact->email }}</p>
    <p><b>Mobile:</b> {{ $contact->number }}</p>

</div>


    
@endsection


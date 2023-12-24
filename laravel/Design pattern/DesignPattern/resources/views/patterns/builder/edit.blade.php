@extends('layouts.master')

@section('title', 'Index Page')

@section('content')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20px;
    }

    h2 {
        margin-bottom: 20px;
    }

    .back-button {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        margin-top: 20px;
    }

    th, td {
        text-align: center;
        padding: 10px;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    .action-buttons {
        width: 150px;
    }

    .form-container {
        margin-top: 20px;
    }
</style>

<div class="container">

    <!-- Input Form -->
    <div class="form-container">
        <h2>update Record</h2>

        <form action="{{ route('builder.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Use the PUT method for updates -->

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $contact->age }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="tel" class="form-control" id="number" name="number" value="{{ $contact->number }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

</div>

@endsection




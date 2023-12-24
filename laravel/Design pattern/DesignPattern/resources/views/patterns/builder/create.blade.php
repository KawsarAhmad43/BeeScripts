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
        <h2>Create Record</h2>

        <form action="{{ route('builder.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="tel" class="form-control" id="number" name="number" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>

@endsection




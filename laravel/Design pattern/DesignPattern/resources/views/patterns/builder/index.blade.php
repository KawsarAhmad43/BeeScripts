
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
</style>

<div class="container">
    <h2>Data List</h2>

    <!-- Search Bar -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
        <button class="btn btn-outline-secondary" type="button">Search</button>
    </div>

    <!-- Back Button and Add Button -->
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('home') }}" class="btn btn-primary back-button">Back</a>
        <a href="{{ route('builder.create') }}" class="btn btn-primary back-button">Add</a>
    </div>

    <!-- Data Table -->
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Number</th>
                <th class="action-buttons">Action</th>
            </tr>
        </thead>
        <tbody>
           
            @forelse($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->age }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->number }}</td>
                    <td class="action-buttons">
                       
                        <a href="{{ route('contacts.show', ['id' => $contact->id]) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('builder.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('builder.delete', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                    
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                       
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No records found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


    
@endsection


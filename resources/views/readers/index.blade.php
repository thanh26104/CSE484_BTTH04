

@extends('layouts.app')

@section('content')
    <div class="container">
    <h1 class="text-center">Readers List</h1>
        <a href="{{ route('readers.create') }}" class="btn btn-primary">Add reader</a>
        @if(session('success'))
    <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reader as $reader)
                    <tr>
                    <td>{{ $reader->id }}</td>
                        <td>{{ $reader->name }}</td>
                        <td>{{ $reader->birthday }}</td>
                        <td>{{ $reader->address }}</td>
                        <td>{{ $reader->phone }}</td>
                        <td>
                        <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i> <!-- View Icon -->
                        </a>
                        <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> <!-- Edit Icon -->
                        </a>
                        <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">
                            
                            <i class="bi bi-trash"></i> <!-- Delete Icon -->
                            </button>
                        </td>

                @csrf

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

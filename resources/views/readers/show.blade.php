@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Reader</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $reader->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $reader->name }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{{ $reader->birthday }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $reader->address }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $reader->phone }}</td>
            </tr>
        </table>

        <a href="{{ route('readers.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
@endsection

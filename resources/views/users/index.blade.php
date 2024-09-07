@extends('layouts.app_login')

@section('title', 'Users List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Users List</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
    </div>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


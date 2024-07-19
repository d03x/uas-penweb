@extends('layouts.admin-layout')

@section('main')
    <div class="card mt-3">
        <div class="card-body">
            <h1>Edit User</h1>
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">

                </div>
                <div class="mb-2">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}">

                </div>
                <div class="mb-3">
                    <label for="role">Role:</label>
                    <select class="form-control" name="role" id="role">
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Update</button>
            </form>

        </div>
    </div>
@endsection

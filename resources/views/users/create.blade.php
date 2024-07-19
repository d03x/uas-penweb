@extends('layouts.admin-layout')

@section('main')
    <div class="card mt-3">
        <div class="card-body">
            <h1>Create User</h1>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name">

                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email">

                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password">

                <label for="role">Role:</label>
                <select class="form-control" name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </div>
@endsection

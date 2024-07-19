@extends('layouts.admin-layout')

@section('main')
 <div class="card mt-3">
    <div class="card-body">
        <h1>Users</h1>
        <a href="{{ route('users.create') }}">Create User</a>
        <ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }} ({{ $user->email }})
                    <a class="btn btn-success btn-sm" href="{{ route('users.show', $user) }}">View</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('users.edit', $user) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-warning" type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
 </div>
@endsection

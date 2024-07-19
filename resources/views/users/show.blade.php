@extends('layouts.admin-layout')

@section('main')
    <div class="card mt-3">
        <div class="card-body">
            <h1>User Details</h1>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Role: {{ $user->role }}</p>
        </div>
    </div>
@endsection

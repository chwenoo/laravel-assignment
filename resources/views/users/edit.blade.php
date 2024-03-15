@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Update User</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('users.update', $user->id)}}" method="POST" class="form">
                @csrf
                @method("PATCH")
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="mb-2">
                    <label for="email" class="fw-semibold">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="mb-2">
                    <label for="password" class="fw-semibold">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}">
                </div>
                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
@endsection

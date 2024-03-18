@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Register</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('users.store')}}" method="POST" class="form">
                @csrf
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email" class="fw-semibold">Email:</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="role" class="fw-semibold">Role:</label>
                    <select name="role" id="role" class="form-select">
                        @foreach ( $roles as $role )
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="password" class="fw-semibold">Password:</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="fw-semibold">Confirmed Password:</label>
                    <input type="password" name="password_confirmation" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">register</button>
            </form>
        </div>
    </div>
@endsection


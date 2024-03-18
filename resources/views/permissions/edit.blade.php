@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center">Update Permission</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('permissions.update', $permission->id)}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$permission->name}}">
                </div>

                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
@endsection

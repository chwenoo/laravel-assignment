@extends('layouts.master')
@section('content')
    <div class="container mt-3">
        <h1 class="text-center">New Permission</h1>
        {{-- @dd($errors); --}}
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('permissions.store')}}" method="POST" class="form">
                @csrf
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    @if($errors->first('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-success w-100">create</button>
            </form>
        </div>
    </div>
@endsection

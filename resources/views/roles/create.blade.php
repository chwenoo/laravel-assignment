@extends('layouts.master')
@section('content')
    <div class="container mt-3">
        <h1 class="text-center">New Role</h1>
        {{-- @dd($errors); --}}
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('roles.store')}}" method="POST" class="form">
                @csrf
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    @if($errors->first('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="permissions" class="fw-semibold">Permissions:</label>
                    <select class="selectpicker form-select" multiple="multiple" data-live-search="true" data-selected-text-format="value" name="permissions[]">
                        @foreach ($permissions as $permission)
                            <option value="{{$permission->name}}">{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">create</button>
            </form>
        </div>
    </div>
@endsection

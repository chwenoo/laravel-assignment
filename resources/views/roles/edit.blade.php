@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center">Update Role</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('roles.update', $role->id)}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$role->name}}">
                </div>
                {{-- <div class="mb-3">
                    <label for="permissions" class="fw-semibold">Permissions:</label>
                    <select class="selectpicker form-select" multiple="multiple" data-live-search="true" data-selected-text-format="value" name="permissions[]">
                        @foreach ($permissions as $permission)
                            <option value="{{$permission->name}}">{{$permission->name}}</option>
                        @endforeach
                    </select>
                </div> --}}

                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
@endsection

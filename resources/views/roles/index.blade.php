@extends('layouts.master');
@section('content')
<div class="container">
    <h1>Role List</h1>

    <a href="{{route('roles.create')}}" class="btn btn-primary my-3">create role</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Permissions</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{ $role->id }}</th>
                    <td>{{ $role->name }}</td>
                    <td>
                        @foreach ($role->permissions as $permission)
                            <span class="text-info">{{$permission->name}}, </span>
                        @endforeach
                    </td>
                    <td>{{ $role->created_at }}</td>
                    <td>{{ $role->updated_at }}</td>
                    <td>
                        <div class="d-flex justify-content-center align-items-middle">
                            <div class="me-1">
                                <a href="{{route('roles.edit', $role->id)}}" class="btn btn-success btn-sm">Edit</a>
                            </div>
                                <form action="{{route('roles.destroy', $role->id)}}" method="post" class="form">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Permission List</h1>

    <a href="{{route('permissions.create')}}" class="btn btn-primary my-3">create permission</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <th scope="row">{{ $permission->id }}</th>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->created_at }}</td>
                    <td>{{ $permission->updated_at }}</td>
                    <td>
                        <div class="d-flex justify-content-center align-items-middle">
                            <div class="me-1">
                                <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-success btn-sm">Edit</a>
                            </div>
                                <form action="{{route('permissions.destroy', $permission->id)}}" method="post" class="form">
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

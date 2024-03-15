@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>User List</h1>

        <a href="{{route('users.create')}}" class="btn btn-success mb-3">Register</a>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    {{-- <th scope="col">Password</th> --}}
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>{{ $user->password }}</td> --}}
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-success btn-sm">Edit</a>
                            </div>

                            <form action="{{route('users.destroy', $user->id)}}" method="post" class="form mt-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

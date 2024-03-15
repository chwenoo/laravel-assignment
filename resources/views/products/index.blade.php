@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Product List</h1>

        <a href="{{route('products.create')}}" class="btn btn-primary my-3">create product</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($products); --}}
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <img src="{{asset('storage/img/' . $product->image)}}" alt="foto" width="100">
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-success btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

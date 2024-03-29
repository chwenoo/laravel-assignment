@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Update Product</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('products.update', $product->id)}}" method="POST" class="form">
                @csrf
                @method("PATCH")
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
                </div>
                <div class="mb-2">
                    <label for="description" class="fw-semibold">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{$product->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="status" class="fw-semibold">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1" @if($product->status === 1) selected @endif>true</option>
                        <option value="0" @if($product->status === 0) selected @endif>false</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="fw-semibold">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{$product->price}}">
                </div>
                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('content')
    <div class="container mt-4">
        <h1 class="text-center">New Product</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('products.store')}}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                    @if($errors->first('name'))
                        <div class="text-danger">{{$errors->first('name')}}</div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="description" class="fw-semibold">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                    @if($errors->first('description'))
                        <div class="text-danger">{{$errors->first('description')}}</div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="image" class="fw-semibold">Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if($errors->first('image'))
                        <div class="text-danger">{{$errors->first('image')}}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="status" class="fw-semibold">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1">true</option>
                        <option value="0">false</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="fw-semibold">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">create</button>
            </form>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">New Article</h1>
        {{-- @dd($errors); --}}
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('articles.store')}}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="title" class="fw-semibold">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                    @if($errors->first('title'))
                    <p class="text-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>

                <div class="mb-2">
                    <label for="slug" class="fw-semibold">Slug:</label>
                    <input type="text" name="slug" id="slug" class="form-control">
                    @if($errors->first('slug'))
                        <p class="text-danger">{{$errors->first('slug')}}</p>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="image" class="fw-semibold">Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if($errors->first('image'))
                        <div class="text-danger">{{$errors->first('image')}}</div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="context" class="fw-semibold">Context:</label>
                    <textarea name="context" id="context" cols="30" rows="5" class="form-control"></textarea>
                    @if($errors->first('context'))
                        <p class="text-danger">{{$errors->first('context')}}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="fw-semibold">Excerpt:</label>
                    <input type="text" name="excerpt" id="excerpt" class="form-control">
                    @if($errors->first('excerpt'))
                        <p class="text-danger">{{$errors->first('excerpt')}}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-success w-100">create</button>
            </form>
        </div>
    </div>
</body>
</html>

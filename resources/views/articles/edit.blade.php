<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Update Article</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('articles.update', $article->id)}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Title:</label>
                    <input type="text" name="title" id="name" class="form-control" value="{{$article->title}}">
                </div>
                <div class="mb-2">
                    <label for="slug" class="fw-semibold">Slug:</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{$article->slug}}">
                </div>
                <div class="mb-2">
                    <label for="context" class="fw-semibold">Context:</label>
                    <textarea name="context" id="context" cols="30" rows="5" class="form-control">{{$article->context}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="fw-semibold">Excerpt:</label>
                    <input type="text" name="excerpt" id="excerpt" class="form-control" value="{{$article->excerpt}}">
                </div>
                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
</body>
</html>

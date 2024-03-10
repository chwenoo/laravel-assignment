<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Article Detail</h1>

        <div class="card bg-dark text-white">
            <div class="card-body">
                <h3 class="card-title">{{$article->title}}</h3>
                <small class="text-warning">{{$article->slug}}</small>
                <p class="card-text">{{$article->context}}</p>
                <small class="text-info">{{$article->excerpt}}</small>
                <p class="mt-3">created at : {{$article->created_at}}</p>
                <p>update at : {{$article->updated_at}}</p>
                <a href="{{route('articles.index')}}" class="btn btn-secondary">back</a>
            </div>
        </div>
    </div>
</body>
</html>

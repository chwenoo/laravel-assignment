<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Article List</h1>

        <a href="{{route('articles.create')}}" class="btn btn-success mb-3">new Article</a>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Context</th>
                    <th scope="col">Excerpt</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>
                            <img src="{{asset('uploadedimages/'.$article->image)}}" alt="foto" width="100">
                        </td>
                        <td>{{ $article->context }}</td>
                        <td>{{ $article->excerpt }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->updated_at }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('articles.show', $article->id)}}" class="btn btn-info btn-sm">show</a>
                                <a href="{{route('articles.edit', $article->id)}}" class="btn btn-success btn-sm">Edit</a>
                            </div>

                            <form action="{{route('articles.destroy', $article->id)}}" method="post" class="form mt-1">
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
</body>
</html>

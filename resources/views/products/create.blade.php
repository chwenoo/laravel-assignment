<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">New Product</h1>
        <div style="max-width: 500px" class="mx-auto">
            <form action="{{route('products.store')}}" method="POST" class="form">
                @csrf
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="description" class="fw-semibold">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
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
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Categories</h1>
    <p>This is the categories index page.</p>

    <h1>Category List</h1>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->category_name }}: {{ $category->description }}</li>
        @endforeach
    </ul>

    <button onclick="window.location.href='{{ route('categories.create') }}'">Create New Category</button>

</body>
</html>
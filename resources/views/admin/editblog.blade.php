<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog</title>
</head>
<body>
    <form action="{{ route('admin.edit.submit', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}"><br><br>
        <label for="body">Body:</label>
        <textarea name="body" id="body">{{ old('body', $blog->body) }}</textarea><br><br>
        <button type="submit">UPDATE</button>
    </form>
</body>
</html>
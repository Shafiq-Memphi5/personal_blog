<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Blog</title>
</head>
<body>
    <form action="{{ route('admin.add.submit') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <label for="body">Body:</label>
        <textarea name="body" id="body"></textarea>
        <button type="submit">ADD</button>
    </form>
</body>
</html>
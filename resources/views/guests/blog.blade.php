<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <h3>{{ $blog->title }}</h3>
    <p>{{ $blog->created_at->format('F d, Y') }}</p>
    <main>
        {{ $blog->body }}
    </main>
</body>
</html>
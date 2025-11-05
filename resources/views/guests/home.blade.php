<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Blog</title>
</head>
<body>
    <div>
        <h1>Personal Blog</h1>
        <div>
            @foreach ($blogs as $blog)
            <p>
                <b><a href="{{ route('guest.blogview', $blog->id) }}">{{ $blog->title }}</a></b>
                {{ $blog->created_at->format('d M Y') }}
            </p>
            @endforeach
        </div>
    </div>
</body>
</html>
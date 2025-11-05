<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Home</title>
</head>

<body>
    <h1>Hello World</h1>
    <div>
        <h2>Personal Blog</h2>
        <button><a href="{{ route('admin.add') }}">+ Add</a></button>
    </div>
    <div>
        @foreach ($blogs as $blog)
            <div>
                <p> {{ $blog->title }} </p>
                <a href="{{ route('admin.edit', $blog->id) }}">Edit</a>
                <form action="{{ route('admin.delete', $blog->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this blog?')">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    <br>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit">LOGOUT</button>
    </form>
</body>

</html>

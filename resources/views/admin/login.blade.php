<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>

<body>
    @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="password" name="password" id="password" placeholder="Password">
            <button type="submit">LOGIN</button>
        </form>
</body>

</html>

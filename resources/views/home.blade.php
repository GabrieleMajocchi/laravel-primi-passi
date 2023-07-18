<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel home</title>
</head>
<body>
    <h1>Hello world!</h1>
    @foreach ($users as $user)
        <h2>Name: {{$user['name']}}</h2>
        <h2>Surname: {{$user['surname']}}</h2>
    @endforeach
    <h2>
        <a href="{{ route('about-us') }}">
            About us
        </a>
    </h2>
</body>
</html>
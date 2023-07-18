<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Membri del team:</h1>
    @foreach ($users as $user)
    <br>
    <h2>{{$user['role']}}</h2>
    <h4>{{$user['name']}} {{$user['surname']}}</h4>
    <br>
    @endforeach

    <h5>
        <a href="{{ route('home') }}">
            Homepage
        </a>
    </h5>
</body>
</html>
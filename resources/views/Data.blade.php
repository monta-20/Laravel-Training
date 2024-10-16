<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Page</title>
</head>
<body>
    <h1>My name is : {{ $name }}</h1>
    <h1>My lastname is : {{ $lastname }}</h1>

    @foreach ($data as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Mis tickets:</h1>
    <hr>
    <ul>
        @foreach ($events as $event)
        <li>{{ $event->title }} <a href="{{$event -> link}}">LInk de la reunión</a></li>
        @endforeach
    </ul>
    <hr>
    <a href="/home">Volver a home</a>
</body>

</html>

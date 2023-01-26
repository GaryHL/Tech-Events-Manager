<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Events</h1>
    <hr>
    <div>
        <p>Lista de eventos</p>
        <ul>
            @foreach ($events as $event)
                <li>
                    <a href="/events/{{ $event->id }}">{{ $event->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <hr>
    <a href="/home"> volver a home</a>
</body>

</html>

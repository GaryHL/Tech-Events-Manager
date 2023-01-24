<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <h1>Home</h1>
    <hr>
    <h1>*Slider*</h1>
    <hr>
    <h1>Event - List</h1>
    <ul>
        @foreach ($events as $event)
            <li>Title: {{$event->title}}</li>
        @endforeach
    </ul>
    <a href="profile">Perfil</a>
</body>

</html>

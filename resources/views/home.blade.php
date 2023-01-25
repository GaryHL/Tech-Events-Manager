<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container_cards {
            display: flex;
            flex-direction: row;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid black;
            padding: 1rem;
            max-width: 200px;
            margin: 0 1rem;
        }

        .img {
            width: 80%;
            border: 2px solid;
        }
    </style>
</head>

<body>
    <h1>Home</h1>
    <hr>
    <p>Eventos destacados:</p>
    <div class="container_cards">
        @foreach ($events as $event)
            @if ($event->outstanding === 'yes')
                <div class="card">
                    <img src={{ $event->url_img }} alt={{ $event->url_img }} class='img'>
                    <h5>{{ $event->title }}</h5>
                    <p>{{ $event->description }}</p>
                    <div>
                        <p>{{ $event->fecha }}</p>
                        <p>{{ $event->hora }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>


    <hr>
    <h1>Lista de eventos</h1>
    <ul>
        {{-- @foreach ($events as $event)
            <li>Title: {{ $event->title }}</li>
        @endforeach --}}
    </ul>
    <a href="profile">Perfil</a>
</body>

</html>

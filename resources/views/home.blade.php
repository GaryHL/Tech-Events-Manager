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
        .container_carousel{
            width:100%;
            display:flex;
            justify-content: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Home</h1>
    <hr>
    <p>Eventos destacados:</p>
    <div class="container_carousel">
        <div id="carouselExample" class="carousel slide" style="width:600px; background-color:gray">
            <div class="carousel-inner">
                @foreach ($events as $event)
                    @if ($event->outstanding === 'yes')
                        <div class="carousel-item active">
                            <img class="d-block w-100" src={{ $event->url_img }} class='img'>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <hr>
    <h1>Lista de eventos</h1>
    <ul>
        {{-- @foreach ($events as $event)
            <li>Title: {{ $event->title }}</li>
        @endforeach --}}
    </ul>
    <a href="profile">Perfil</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

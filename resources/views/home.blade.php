@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

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
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                        rel="stylesheet"
                        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
                        crossorigin="anonymous">
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
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>

                                    <body>
                                        <h1>Home</h1>
                                        <hr>
                                        <p>Eventos destacados:</p>
                                        <div class="container_carousel">
                                            <div id="carouselExample" class="carousel slide"
                                                style="width:600px; background-color:rgb(226, 226, 226); border:2px solid black">
                                                <div class="carousel-inner">
                                                    @foreach ($events as $event)
                                                    @if ($event->outstanding === 'yes')
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src={{ $event->url_img }}
                                                            class='img'>
                                                        <div style='padding:0 1rem'>

                                                            <h5>{{ $event->title }}</h5>
                                                            <p>{{ $event->description }}</p>
                                                            <p>{{ $event->fecha }}</p>
                                                            <p>{{ $event->hora }}</p>

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
                                                    <a href="events">Ver todos los eventos</a>
                                                    <a href="/events/tickets/myTickets">Mis tickets</a>

                                                    <script
                                                        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                                                        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                                                        crossorigin="anonymous">
                                                    </script>
                                    </body>

                                    </html>
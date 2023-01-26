<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My tickets</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link href="{{ asset('css/events.css') }}" rel="stylesheet">
</head>
<body>
    <h1 class="title">Mis tickets:</h1>
    <br>
    <br>
    <ul style="list-style: none; padding:0">
        @foreach ($events as $event)
        <li style="margin:1rem 0">
            <a href="/events/{{ $event->id }} ">
                <div class="card_event">
                    <img src="/{{ $event->url_img }}" alt="" class="img_card">
                    <div class="info_event">
                        <h4 class="title_event">{{ $event->title }}</h4>
                        <div class="place">
                            <p class="date_event">{{ $event->fecha }}</p>
                            <p class="description_event">{{ $event->description }}</p>
                        </div>
                    </div>
                    <div class="container_icon">
                        <button class="btn_delete">Cancelar</button>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
    <hr>

    <nav class="navbar">
        <a href="/home">
            <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="hover" class="iconNav"
                colors="primary:#ffffff,secondary:#ffffff">
            </lord-icon>
        </a>
        <a href="/events">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" class="iconNav"
                colors="primary:#ffffff,secondary:#ffffff">
            </lord-icon>
        </a>
        <a href="/profile">
            <lord-icon src="https://cdn.lordicon.com/imamsnbq.json" trigger="hover" class="iconNav"
                colors="primary:#ffffff,secondary:#ffffff">
            </lord-icon>
        </a>
        <a href="/events/tickets/myTickets">
            <lord-icon src="https://cdn.lordicon.com/cjieiyzp.json" colors="primary:#ffffff,secondary:#ffffff"
                class="iconNav" trigger="hover"> </lord-icon>
        </a>
    </nav>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="{{ asset('css/showEvent.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="title">Detalles del evento: {{ $event->title }}</h1>
    <div class="info_event">
        <img src="/{{ $event->url_img }}" class="img_event" alt="">
        <div class="details_event">
            <h3>Descripción: </h3>
            <p>{{ $event->description }}</p>
            <p>Nombre del evento: {{ $event->title }}</p>
            <p>Fecha: {{ $event->fecha }}</p>
            <p>Hora: {{ $event->hora }}</p>
            <form action="/events/tickets/store" method="POST">
                @if (session()->has('message'))
                    <div class="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @csrf
                <input type="text" name="user_id" value={{ $user->id }}
                    style="position:absolute; opacity:0; top:0; ">
                <input type="text" name="event_id" value={{ $event->id }}
                    style="position:absolute; opacity:0; top:0; ">
                <button type="submit" class="btn_inscribirse">Inscribirse al evento</button>

            </form>
        </div>

    </div>
    <br>
    <p style="color: #D60846">Si no eres admin no edites el evento por favor y gracias.</p>
    <br>
    <h4>Editar Evento:</h4>

    <form action="{{ route('events/update', $event->id) }}" method="post" enctype="multipart/form-data"
        class="form_edit">
        @csrf
        @method('PUT')

        <div class="container_inputs">
            <div class="group">
                <input type='text' name='title' required class="input" />
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Titulo</label>
            </div>
            <div class="group">
                <input type='text' name='description' required class="input" />
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Descripción</label>
            </div>
            <div class="group">
                <p style="opacity:0.8">Img:</p>
                <input type='file' name='url_img' required class="input" />
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>
            <div class="group">
                <input type='number' name='max_participants' required class="input" />
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Max-participants</label>
            </div>

            <div class="group">
                <p style="opacity:0.8">Relevante?</p>
                <br>
                <select name='outstanding' required>
                    <option value="yes">si</option>
                    <option value="no">no</option>
                </select>
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>

            <div class="group">
                <input type='text' name='link' required class="input" />
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Link de la reunión</label>
            </div>

            <div class="group">
                <p style="opacity:0.8">Fecha:</p>
                <br>
                <input type='date' name='fecha' placeholder="Fecha" required />
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>
            <div class="group">
                <p style="opacity:0.8">Hora:</p>
                <br>
                <input type='time' name='hora' placeholder="Hora" required />
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>
        </div>
        <div class="" style="display:grid-template-columns:auto"></div>
        <button type='submit' class="btn_actualizar"> Actualizar el evento</button>
    </form>
    <form action="/events/destroy/{{ $event->id }}" method='POST'>
        @method('DELETE')
        @csrf
        <button type="submit" class="btn_delete">Borrar este evento</button>
    </form>


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

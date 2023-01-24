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
    <h1>Perfil</h1>
    <hr>
    <h3>User name:</h3>
    <hr>
    <h2>Crear nuevo evento</h2>
    <form action='event/post' method="post">
        @csrf
        <input type='text' name='title' placeholder="title" required />
        <input type='text' name='description' placeholder="description" required />
        <input type='text' name='url_img' placeholder="url" required />
        <input type='number' name='max_participants' placeholder="Max-participants" required />
        <input type='number' name='outstanding' placeholder="Outstanding" required />
        <input type='date' name='fecha' placeholder="Fecha" required />
        <input type='time' name='hora' placeholder="Hora" required />
        <button type='submit'> pull</button>
    </form>
    <h2>Actualizar un evento</h2>

    Editar un evento
    @foreach ( $events as $event )
    <a href={{'event/show/',$event}}>{{$event -> title}}</a>
    @endforeach

    <form action={{route('event/update', $event)}} method="post">
        @csrf
        @method('put')
        <select name="id">
                <option value={{$event->id}}>{{$event->title}}</option>
        </select>
        <input type='text' name='title' placeholder="title" required />
        <input type='text' name='description' placeholder="description" required />
        <input type='text' name='url_img' placeholder="url" required />
        <input type='number' name='max_participants' placeholder="Max-participants" required />
        <input type='number' name='outstanding' placeholder="Outstanding" required />
        <input type='date' name='fecha' placeholder="Fecha" required />
        <input type='time' name='hora' placeholder="Hora" required />
        <button type='submit'> pull</button>
    </form>
    <a href="home">volver a home</a>

</body>

</html>

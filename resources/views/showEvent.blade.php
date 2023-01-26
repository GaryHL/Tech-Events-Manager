<h1>Detalles del evento</h1>
<hr>
<h5>Event_id: {{ $event->id }}</h5>
<p>Titulo:{{ $event->title }}</p>
<p>Descripción: {{ $event->description }}</p>
<p>Fecha: {{ $event->fecha }}</p>
<p>Hora: {{ $event->hora }}</p>

<form action="/events/destroy/{{ $event->id }}" method='POST'>
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form>


<form action="/events/tickets/store" method="POST">
    @if (session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>  
    @endif
    @csrf
    <input type="text" name="user_id" value={{ $user->id }} style="position:absolute; opacity:0; top:0; ">
    <input type="text" name="event_id" value={{ $event->id }} style="position:absolute; opacity:0; top:0; ">

    <input type="submit" value="Inscribirse">

</form>
{{-- <a href="/events/destroy/{{ $event->id }}">Eliminar</a> --}}
<hr>
<a href="/events">Volver a la lista de eventos</a>
<a href="/home">Volver a home</a>

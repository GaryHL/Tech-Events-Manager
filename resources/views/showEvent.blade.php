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
    <button type="submit">Borrar este evento</button>
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

    <input type="submit" value="Inscribirse al evento">

</form>
<hr>
<h4>Editar este evento</h4>
<form action="{{route('events/update', $event->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type='text' name='title' placeholder="title" required />
    <input type='text' name='description' placeholder="description" required />
    <input type='file' name='url_img' placeholder="imagen" >
    {{-- <input type='text' name='url_img' placeholder="url" required /> --}}
    <input type='test' name='max_participants' placeholder="Max-participants" required />
    {{-- <input type='number' name='outstanding' placeholder="Outstanding" required /> --}}
    <label > Outsanding </label><select name='outstanding' required>
        <option value="yes">si</option>
        <option value="no">no</option>
    </select>
    <input type='text' name='link' placeholder="link" required />
    <input type='date' name='fecha' placeholder="Fecha" required />
    <input type='time' name='hora' placeholder="Hora" required />
    <button type='submit'> pull</button>
</form>




{{-- <a href="/events/destroy/{{ $event->id }}">Eliminar</a> --}}
<hr>
<a href="/events">Volver a la lista de eventos</a>
<a href="/home">Volver a home</a>

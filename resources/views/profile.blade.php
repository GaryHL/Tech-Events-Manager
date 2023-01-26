<h1>Perfil</h1>
<hr>
<h3>User name:</h3>
<hr>
<h2>Crear nuevo evento</h2>
<form action='event/post' method="post" enctype="multipart/form-data">
    @csrf
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

<a href="home">volver a home</a>
<form action='/logout' method='post'>
    @csrf
    <button type='sumbit'>Logout</button>
</form>

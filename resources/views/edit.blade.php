<h2>Editar</h2>
{{-- ruta donde guardaremos la informacoin  --}}
<form action='/edit/update/1' method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type='text' name='title' placeholder="title" required />
    <input type='text' name='description' placeholder="description" required />
    <input type='file' name='url_img' placeholder="imagen" >

    <input type='test' name='max_participants' placeholder="Max-participants" required />


    <label > Outsanding </label><select name='outstanding' required>
        <option value="yes">si</option>
        <option value="no">no</option>
    </select>
    <input type='date' name='fecha' placeholder="Fecha" required />
    <input type='time' name='hora' placeholder="Hora" required />
    <button type='submit'> pull</button>
</form>
<h2>Actualizar un evento</h2>


<a href="home">Perfil</a>

<form action='/logout' method='post'>
    @csrf
    <button type='sumbit'>Logout</button>
</form>

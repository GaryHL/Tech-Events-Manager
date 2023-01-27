<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
</head>

<body>

    <h1 class="title">Perfil</h1>
    <br>
    <p>Si no eres administrador porfavor no crees un nuevo evento</p>
    <br>
    <h2>Crear nuevo evento</h2>
    <br>
    <br>
    <form action='event/post' method="post" enctype="multipart/form-data" class="form_edit">
        @csrf
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
                <input type='date' name='fecha' placeholder="Fecha" required  class="input_time"/>
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>
            <div class="group">
                <p style="opacity:0.8">Hora:</p>
                <br>
                <input type='time' name='hora' placeholder="Hora" required  class="input_time"/>
                <span class="highlight"></span>
                <span class="bar"></span>
            </div>
        </div>
        <button type='submit' class="btn_green"> Crear evento</button>
    </form>
        <form action='/logout' method='post'>
        @csrf
        <button type='sumbit' class="btn_delete">Cerrar sesión</button>
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
        <a href="profile">
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

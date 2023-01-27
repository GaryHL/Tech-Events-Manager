<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container_login">


        <form action="{{ route('login') }}" method="POST" class="form">
            <h1 class="title_form">Iniciar sesión</h1>

            @csrf
            <div class="container_inputs">


                <div class="group">
                    <input type="email" name="email" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email:</label>
                </div>
                <div class="group">
                    <input type="password" name="password" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password:</label>
                </div>
                <a style="outline:none;color:rgba(255, 255, 255, 0.486);cursor:pointer;"
                    href="{{ route('register') }}">Register</a>

                <div>
                    <button type="submit" class="btn_green">Iniciar sesión</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>

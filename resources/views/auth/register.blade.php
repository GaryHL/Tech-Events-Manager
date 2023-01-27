<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container_login">

        
        <form action="{{ route('register') }}" method="POST" class="form">
            <h1>Registrate</h1>

            @csrf

            <div class="container_inputs">
                <div class="group">
                    <input type='text' name='name' required class="input" />
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Name:</label>
                </div>
                <div class="group">
                    <input type='email' name='email' required class="input" />
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email:</label>
                </div>
                <div class="group">
                    <input type="password" name="email" required class="input" />
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>

                <div class="group">
                    <input type="password" name="password_confirmation" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
            </div>

            <a href="{{ route('login') }}" style="outline:none;color:rgba(255, 255, 255, 0.486);cursor:pointer;">Login</a>
            <div>
                <button type="submit" class="btn_green">Registrarse</button>
            </div>
        </form>
    </div>

</body>

</html>

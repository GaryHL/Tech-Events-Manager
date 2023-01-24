<h1>Register</h1>

<form action="{{ route('login') }}" method="POST">

    @csrf

    <div>
        
    
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{old('email')}}" >
        </div>
        <div>
            <label>Pasword:</label>
            <input type="password" name="password"  >
        </div>

        <span class="cursor-pointer">Recuerdame</span>
        <input name="remember" type="checkbox">
        
    </div>

    <div>
        <a href="{{route('register')}}">Register</a>
        <button type="submit">Login</button>
    </div>
</form>

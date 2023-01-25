<h1>Register</h1>

<form action="{{ route('register') }}" method="POST">

    @csrf

    <div>
        <div>
            <label>Name:</label>
            <input autofocus="autofocus" type="name" name="name" value="{{old('name')}}">
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{old('email')}}" >
        </div>
        <div>
            <label>Pasword:</label>
            <input type="password" name="password"  >
        </div>
        <div>
            <label>Pasword Confirmation:</label>
            <input type="password" name="password_confirmation"  >
        </div>
    </div>
 
    <div>
        <a href="{{route('login')}}">Login</a>
        <button type="submit">Register</button>
    </div>
</form>

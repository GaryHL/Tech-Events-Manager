<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255' ],
            // 'lastname' => ['required', 'string', 'max:255'],
            // 'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::default()],
        ]);
        User::create([
            'name' => $request->name,
            // 'lastname' => $request->lastname,
            // 'username' => $request ->username,
            'email' => $request->email,
            'password' => bcrypt($request -> password),
        ]);

        return to_route('login')-> with('status', 'Account Created please Login');
    }
}

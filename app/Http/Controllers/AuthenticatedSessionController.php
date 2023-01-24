<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        dd($request->boolean('remember'));
        $credentials = $request->validate([
            'email'=> ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        
    //    if( ! Auth::attempt($credentials, $request->boolean('remember')) ){
    //         throw ValidationException::withE([
    //             'email' => __('auth.failed')
    //         ]);
    //    }
    //    $request->session()->regenerate();
    //     return redirect()->intended()
    //     ->with('status', 'You are Logged');
     }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // Retrive Input
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login
            $user = User::where('email', $request->email)->first();
            $user->update(['lastsession' => now()]);
            return redirect('dashboard');

            //return redirect()->intended('/details');
        }
        // if failed login
    }
}

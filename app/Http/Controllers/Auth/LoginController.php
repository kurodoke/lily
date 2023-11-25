<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index() : View {
        return view('auth.login');
    }

    function login(Request $request) : RedirectResponse {
        $credentials = $request->validate([
            'email' => 'required|email|min:3|max:255',
            'password' => 'required|string|min:3|max:255',
        ]);

        if(auth('admin')->attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }
        if(auth('web')->attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->route('landing-page');
        }
        return redirect()->route('login')->withErrors(['authentication' => 'Email atau password salah!'])->withInput();
    }
}

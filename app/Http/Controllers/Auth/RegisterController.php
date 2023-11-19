<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index() : View {
        return view('auth.register');
    }

    function register(): RedirectResponse {
        return redirect()->route('login')->with('message', 'Registrasi Berhasil!!');
    }
}

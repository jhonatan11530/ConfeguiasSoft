<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login.index');
    }

    public function validar(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('inicio');
        } else {
           return redirect('login')->with('message', 'Error en los datos de acceso');
        }
    }
}

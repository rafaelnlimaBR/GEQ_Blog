<?php
namespace App\Http\Controllers\Front;

use \App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function index()
    {
        return view('front.login');
    }

    public function entrar()
    {
        if(auth()->attempt(['email'=>request()->get('email'),'password'=>request()->get('password')])){

            return \Redirect::to('admin/usuario');

        }

        return redirect()->route('login')->with('alerta','Login ou senha incorretos.');
    }

    public function sair()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
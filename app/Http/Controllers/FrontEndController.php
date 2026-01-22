<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){
        return view('sitio.pages.index');//busca la vista que va a utilizar
    }

    function register(){
        return view('register');
    }


    function login(){
        return redirect()->route('login');
    }
}

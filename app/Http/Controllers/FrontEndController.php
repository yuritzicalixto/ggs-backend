<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function index(){
        return view('sitio.pages.index');//busca la vista que va a utilizar
    }

    function galeria(){
        return view('sitio.pages.galeria');//busca la vista que va a utilizar
    }

    function nosotros(){
        return view('sitio.pages.nosotros');//busca la vista que va a utilizar
    }

    function productos(){
        return view('sitio.pages.productos');//busca la vista que va a utilizar
    }

    function servicios(){
        return view('sitio.pages.servicios');//busca la vista que va a utilizar
    }

    function register(){
        return view('register');
    }


    function login(){
        return redirect()->route('login');
    }
}

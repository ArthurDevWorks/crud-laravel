<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        //Carregar a view index
        return view('users.index');
    }

    public function create()
    {
        //Carregar a view cadastrar
        return view('users.create');
    }
}

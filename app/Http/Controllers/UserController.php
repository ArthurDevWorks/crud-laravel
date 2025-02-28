<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

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

    public function store(UserRequest $request)
    {
        $request->validated();
    }
}

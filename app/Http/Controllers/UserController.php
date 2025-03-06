<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc('id')->get();

        //Carregar a view index
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('users.show',['user' => $user]);
    }

    public function create()
    {
        //Carregar a view cadastrar
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        $request->validated();

        //Criação do usuario
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        //Redirect com mensagem de sucesso
        return redirect()->route('user.index')->with('sucess', 'Usuario cadastrado com sucesso!');
    }
}

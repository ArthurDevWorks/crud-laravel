@extends('layouts.admin')
    
    @section('content')

        <a href="{{ route('user.index') }}">Listar</a>

        <h2>Formulario de Cadastro</h2>

        @if ($errors->any())
            @foreach ($errors->all() as $error )
                <p style="color: #f00;">
                    {{ $error }}
                </p>
            @endforeach    
        @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            @method('POST')

            <label>Nome</label>
            <input type="text" name="name" placeholder="Nome Completo" value="{{ old ('name') }}"> <br><br>

            <label>Email</label>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"> <br><br>

            <label>Senha</label>
            <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}"> <br><br>

        <button type="submit">Cadastrar</button>

        </form>
    @endsection
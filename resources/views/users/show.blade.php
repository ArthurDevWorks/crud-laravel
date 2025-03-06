@extends('layouts.admin')
    
    @section('content')
    
        <a href="{{ route('user.index') }}">Listar</a> <br>
        <a href="{{ route('user.edit', ['user'=> $user->id]) }}">Atualizar</a> <br>
        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
            @csrf
            @method('delete')
            <button type="submit" onclick = "return confirm('Tem certeza que deseja deletar este registro ?')"> Apagar</button>
        </form>

        @if (session('sucess'))
            <p style="color: #086;">
                {{ session('sucess') }}
            </p>  
        @endif

        <h2>Visualizar Usuario</h2>

        ID:         {{ $user->id }} <br>
        Nome:       {{ $user->name}} <br>
        Email:      {{ $user->email}} <br>
        Cadastrado: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }} <br>
        Editado:    {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y') }}
        
    @endsection
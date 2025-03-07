@extends('layouts.admin')
@section('content')
    <div class="card mt-5 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
             <span>
                Listar Usuarios
            </span>

            <span class="ms-auto">
                <a href="{{ route('user.create') }}">Cadastrar</a>
            </span>
        </div>

        
        @if (session('sucess'))
            <p style="color: #086;">
                {{ session('sucess') }}
            </p>  
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user )
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-light btn-sm" >Visualizar</a>
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-light btn-sm">Atualizar</a>

                            {{-- Forma errada --}}
                            {{-- <a href="{{ route('user.destroy', ['user' => $user->id]) }}">Deletar</a> <br> --}}

                            <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick = "return confirm('Tem certeza que deseja deletar este registro ?')" class="btn btn-light btn-sm"> Apagar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
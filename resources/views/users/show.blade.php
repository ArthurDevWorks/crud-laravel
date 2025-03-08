@extends('layouts.admin')

@section('content')

    <div class="card mt-5 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalhes do Usuário</h5>
            <div class="d-flex">
                <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm me-2">Listar</a>
                <a href="{{ route('user.edit', ['user'=> $user->id]) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar este registro?')">
                        Excluir
                    </button>
                </form>
            </div>
        </div>

        <div class="card-body">
            <x-alert />

            <dl class="row">
                <dt class="col-sm-3 fw-bold">ID</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>

                <dt class="col-sm-3 fw-bold">Nome</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>

                <dt class="col-sm-3 fw-bold">Email</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>

                <dt class="col-sm-3 fw-bold">Cadastrado</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i') }}</dd>

                <dt class="col-sm-3 fw-bold">Última Atualização</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i') }}</dd>
            </dl>
        </div>
    </div>

@endsection

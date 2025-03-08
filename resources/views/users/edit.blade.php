@extends('layouts.admin')

@section('content')

    <div class="card mt-5 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Atualizar Usuário</h5>
            <div>
                <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm me-2">Listar</a>
                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-info btn-sm">Visualizar</a>
            </div>
        </div>

        <div class="card-body">
            {{-- Exibe mensagens de erro --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Formulário de atualização --}}
            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome Completo" 
                        value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" 
                        value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Nova Senha (opcional)">
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>

@endsection

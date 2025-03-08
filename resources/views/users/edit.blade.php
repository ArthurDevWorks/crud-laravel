@extends('layouts.admin')

@section('content')
    <div class="card mt-5 mb-4 border-dark shadow" style="background-color: #1e1e1e; color: #e0e0e0;">
        <div class="card-header d-flex justify-content-between align-items-center border-secondary" 
             style="background-color: #121212; color: #e0e0e0;">
            <h5 class="mb-0">Atualizar Usuário</h5>
            <div>
                <a href="{{ route('user.index') }}" class="btn btn-outline-secondary btn-sm me-2">Listar</a>
                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-outline-info btn-sm">Visualizar</a>
            </div>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome Completo" 
                        value="{{ old('name', $user->name) }}" required style="background-color: #2d2d2d; color: #e0e0e0; border-color: #444;">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" 
                        value="{{ old('email', $user->email) }}" required style="background-color: #2d2d2d; color: #e0e0e0; border-color: #444;">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Nova Senha" 
                        style="background-color: #2d2d2d; color: #e0e0e0; border-color: #444;">
                </div>

                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection
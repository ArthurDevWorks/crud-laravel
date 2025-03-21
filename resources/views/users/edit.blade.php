@extends('layouts.admin')

@section('content')
    <div class="card mt-5 mb-4 border-dark shadow" style="background-color: #1e1e1e; color: #e0e0e0;">
        <div class="card-header d-flex justify-content-between align-items-center border-secondary">
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
                    <input type="text" name="name" class="form-control" 
                        value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" 
                        value="{{ old('email', $user->email) }}" required >
                </div>

                 <div class="row">

                     <div class="mb-3 col-6">
                        <label for="password" class="form-label">Senha</label>
                        <div class="input-group">
                             <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required>
                             <span class="input-group-text" role="button" onclick="togglePassword('password',this)"> <i class="bi bi-eye"></i> </span>
                        </div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                        <div class="input-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" required>
                                <span class="input-group-text" role="button" onclick="togglePassword('password_confirmation',this)"> <i class="bi bi-eye"></i> </span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection
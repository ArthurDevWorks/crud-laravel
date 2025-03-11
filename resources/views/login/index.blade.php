@extends('layouts.auth')

@section('content')

    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm  border-dark shadow" style="max-width: 360px; width: 100%; background-color: #1e1e1e; color: #e0e0e0;">
            <div class="text-center mb-4">
                <h4 class="mt-2">Acesse sua conta</h4>
            </div>
            
            <x-alert />

            <form action="" method="POST">
                @csrf
                @method('POST')

                 <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required style="background-color: #2d2d2d; color: #e0e0e0; border-color: #444;" value="{{ old('email') }}">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" required style="background-color: #2d2d2d; color: #e0e0e0; border-color: #444;">
                </div>

                 <button type="submit" class="btn btn-outline-primary w-100">Entrar</button>

            </form>
            
        </div>
    </main>
@endsection
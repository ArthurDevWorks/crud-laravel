<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando CRUD</title>
</head>
<body>

    <a href="{{ route('user.create') }}">Cadastrar</a>

    <h2> Listar Usuarios</h2>

    @if (session('sucess'))
        <p style="color: #086;">
            {{ session('sucess') }}
        </p>  
    @endif

    @forelse ($users as $user)
        ID:     {{ $user->id }} <br>
        Nome:   {{$user->name}} <br>
        Email:  {{$user->email}} <br> <hr>

    @empty
        
    @endforelse

</body>
</html>
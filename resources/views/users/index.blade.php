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
        Nome:   {{ $user->name}} <br>
        Email:  {{ $user->email}} <br> 
        
        <a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a> <br>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}">Atualizar</a> <br>

        {{-- Forma errada --}}
        {{-- <a href="{{ route('user.destroy', ['user' => $user->id]) }}">Deletar</a> <br> --}}

        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
            @csrf
            @method('delete')
            <button type="submit" onclick = "return confirm('Tem certeza que deseja deletar este registro ?')"> Apagar</button>
        </form>

        <hr>

    @empty
        
    @endforelse

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Cadastro</title>
</head>
<body>
    
     <a href="{{ route('user.index') }}">Listagem</a>

    <h2>Visualizar Usuario</h2>

     ID:         {{ $user->id }} <br>
     Nome:       {{ $user->name}} <br>
     Email:      {{ $user->email}} <br>
     Cadastrado: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }} <br>
     Editado:    {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y') }}

</body>
</html>
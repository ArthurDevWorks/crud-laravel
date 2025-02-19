<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
</head>
<body>

    <a href="{{ route('user.index') }}">Listar</a>

    <h2>Formulario de Cadastro</h2>

    <form action="#" method="POST">
        @csrf
        @method('POST')

        <label>Nome</label>
        <input type="text" name="name" placeholder="Nome Completo"> <br><br>

         <label>Email</label>
        <input type="email" name="email" placeholder="Email"> <br><br>

         <label>Senha</label>
        <input type="password" name="password" placeholder="Senha"> <br><br>

        <input type="submit">

    </form>

</body>
</html>
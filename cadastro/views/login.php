<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Login</title>
    </head>
    <body>
        <form method="POST">
            <legend>Login</legend>

            <label>Nome :</label>
            <input type="text" name="nome"><br><br>

            <label>Email : </label>
            <input type="email" name="email"><br><br>

            <label>Senha : </label>
            <input type="password" name="senha"><br><br>

            <input type="submit" value="Entrar" id="botao">

            <a href="login/criar" id="criar">Criar Conta</a>
        </form>
    </body>
</html>

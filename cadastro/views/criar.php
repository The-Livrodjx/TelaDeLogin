<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            form {
                position: relative;
                margin: auto;
                margin-top: 100px;
                border: solid 1px black;
                width: 400px;
                height: 300px;
                padding: 20px;
            }

            legend {
                font-size: 50px;
                font-weight: bold;
                padding-left: 60px;
                padding-bottom: 50px;
            }

            label, input {
                padding: 5px;
                line-height: 5px;
            }

            #botao {
                text-align: center;
                position: relative;
                margin-left: 80px;
                margin-top: 20px;
                width: 100px;
                height: 30px;
            }
        </style>
        <title>Criar Conta</title>
    </head>
    <body>
        <form method="POST">
            <legend>Criar Conta</legend>

            <label>Nome :</label>
            <input type="text" name="nome"><br><br>

            <label>Email : </label>
            <input type="email" name="email"><br><br>

            <label>Senha : </label>
            <input type="password" name="senha"><br><br>

            <input type="submit" value="Criar" id="botao">
        </form>
    </body>
</html>
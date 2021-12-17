<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/estilo_login.css">
        <link rel="stylesheet" href="css/estilo_paginas.css">

        <title>Login</title>

    </head>

    <body>

        <div class="navbar">
            <a class="active" href="index.php">Pagina Inicial</a>
            <a href="cadastro.php">Faça seu cadastro!</a>
            </div>
            <div class="sidenav">
            <a href="projeto1.php?id=1">Análise Daggerfall</a>
            <a href="projeto1.php?id=2">DOOM</a>
        </div>

        <div id="login">

            <form method="post" class="card">

                <div class="card-header">

                    <h2>Login</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="usuario">Usuário</label>

                        <input type="text" name="user" id="usuario" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" name="pass" id="password" autocomplete="off">

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="login" class="submit">

                </div>

            </form>

        </div>

    </body>

</html>
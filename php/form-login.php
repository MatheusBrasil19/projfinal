<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
    <img src="../img/copa.png" id="img">
</head>

<body>




    <div class="container">
        <h1>Login de Usuário</h1>


        <form action="login.php" method="POST">

            <div>

                <input type="text" name="email" id="input" placeholder="E-mail">
                <br></br>


                <input type="password" name="senha" id="input" placeholder="Senha">
                <br></br>

                <input type="submit" value="Entrar" id="submit">
                <br></br>
                <p> Novo por aqui? Clique no link<a href="./cadastrar.php">Cadastrar</a></p>
            </div>
        </form>
    </div>
</body>

</html>
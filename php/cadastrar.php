
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/login.css">
    <title>CADASTRO</title>
    <img src="../img/copa.png" id="img">
</head>
<body>




    <div class="container">
    <h1>cadastro de Usuário</h1>

    <br><br>
    <form action="create.php" method="GET">

        <input type="text" name="nome" id="input" placeholder="Informe o seu nome">
        <br><br>
        <input type="email" name="email" id="input" placeholder="Informe o seu melhor em-mail">
        <br><br>
        <input type="password" name="senha" id="input" placeholder="Informe sua senha">
        <br><br>
       
       <div>    
        <input type="submit" value="salvar" id="submit">
        <br><br>
        
</div>
    </form>
    </div>
</body>
</html>
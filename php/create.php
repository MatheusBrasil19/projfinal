<?php
$name = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

try {
    $conexao = new PDO("mysql:host=localhost;dbname=bdlogin", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    echo 'conectei';
} catch (PDOException $erro) {
    echo "Erro na conexão:".$erro->getMessage();
}

$stmt = $conexao->prepare("INSERT INTO tbusu(name, email, senha) VALUES (?, ?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);

$stmt->execute();
header('Location: form-login.php');
?>
<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

//verifica se as variáveis email e password não estão vazias
if (empty($email) || empty($password))
{
    echo "Informe email e senha";
    exit;
}
 
// cria o hash da senha
$passwordHash = ($password);
 
//Conecta no banco de dados
$PDO = db_connect();
 
//Verifica se o email e a senha existem no banco de dados
$sql = "SELECT id, name FROM tbusu WHERE email = :email AND senha = :password";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 


if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];
 
header('Location: panel.php');
?>
<?php
require_once('conexao.php');

$email = $_POST['email'];
$password = $_POST['password'];
$rememberMe = $_POST['rememberMe'];

// $password = md5($password);

$query = "select * from usuario where email_usuario = '$email' and senha_usuario = '$password'";
$resposta = mysqli_query($link, $query);
$line = mysqli_fetch_array($resposta);

if($line == 0){
    echo "false";
}else{
    session_start();
    $_SESSION['id_estudante'] = $line['id_estudante'];
    $_SESSION['primeiro_nome'] = $line['primeiro_nome_usuario'];
    $_SESSION['segundo_nome'] = $line['segundo_nome_usuario'];
    $_SESSION['email'] = $line['email_usuario'];
    $_SESSION['senha'] = $line['senha_usuario'];
    $_SESSION['imagem'] = $line['imagem_usuario'];
    
    $id = $line['id_estudante'];
    $data = date('Y-m-d');
    $hora = date('H:i:s');
    echo "true";
}
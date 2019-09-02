<?php
include_once("conexao.php");

$email = $_POST['email'];
$password = $_POST['password'];
$rememberMe = $_POST['rememberMe'];

// $password = md5($password);

$query = "select * from usuario where email = '$email' and senha = '$password'";
$resposta = mysqli_query($link, $query);
$line = mysqli_fetch_array($resposta);

if($line == 0){
    echo "false";
}else{
    session_start();
    $_SESSION['id_estudante'] = $line['id_estudante'];
    $_SESSION['primeiro_nome'] = $line['primeiro_nome'];
    $_SESSION['segundo_nome'] = $line['segundo_nome'];
    $_SESSION['email'] = $line['email'];
    $_SESSION['senha'] = $line['senha'];
    
    $id = $line['id_estudante'];
    $data = date('Y-m-d');
    $hora = date('H:i:s');
    $ip = $_SERVER["REMOTE_ADDR"];

    $query = "insert into log (id_estudante,hora,data,ip) values ('$id', '$hora', '$data', '$ip')";
    $resposta = mysqli_query($link, $query);
    echo "true";
}
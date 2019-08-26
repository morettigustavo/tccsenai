<?php
include_once("conexao.php");

$email = $_POST['email'];
$password = $_POST['password'];
$rememberMe = $_POST['rememberMe'];

//$password = md5($password);

$query = "select * from usuario where email = '$email' and senha = '$password'";
$resposta = mysqli_query($link, $query);

if(mysqli_fetch_array($resposta) == null){
    echo "false";
}else{
    $id = null;

    while($line = mysqli_fetch_array($resposta)){
        if($rememberMe){
            setcookie("id_estudante",$line['id_estudante']);
            setcookie("primeiro_nome",$line['primeiro_nome']);
            setcookie("email",$line['email']);
            setcookie("senha",$line['senha']);
        }
        session_start();
        $_SESSION['id_estudante'] = $line['id_estudante'];
        $_SESSION['primeiro_nome'] = $line['primeiro_nome'];
        $_SESSION['email'] = $line['email'];
        $_SESSION['senha'] = $line['senha'];
        $id = $line['id_estudante'];
    }

    $data = date('Y-m-d');
    $chora = date('H:i:s');

    $query = "insert into log (id_estudante,hora,data) values ('$id', '$chora', '$data')";
    $resposta = mysqli_query($link, $query);
    echo "true";
}
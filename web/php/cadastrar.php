<?php
include_once("conexao.php");

$primeiro_nome = $_POST['primeiro_nome'];
$segundo_nome = $_POST['segundo_nome'];
$email = $_POST['email'];
$password = $_POST['password'];

//$password = md5($password);

$query = "insert into usuario (primeiro_nome,segundo_nome,email,senha) values ('$primeiro_nome','$segundo_nome', '$email','$password')";

$resposta = mysqli_query($link, $query);

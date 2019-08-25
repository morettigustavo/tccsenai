<?php
include_once("conexao.php");

$primeiro_nome = $_POST['primeiro_nome'];
$segundo_nome = $_POST['segundo_nome'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "insert into usuario (nome,email,senha) values ('$nickname', '$msg')";

$resposta = mysqli_query($link, $query);
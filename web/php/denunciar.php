<?php
session_start();
require_once('conexao.php');

$id_postagem = $_GET['id_postagem'];
$id_estudante = $_SESSION['id_estudante'];

$query = "insert into denuncias (id_postagem, id_estudante) values ($id_postagem, $id_estudante)";

$resposta = mysqli_query($link, $query);
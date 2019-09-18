<?php 
session_start();
require_once('conexao.php');

$area = $_POST['area'];
// $materia = $_POST['materia'];
// $tags = $_POST['tags'];

$id_user = $_SESSION['id_estudante'];

$sql = "insert into postagem (id_estudante) values ('$id_user')";

mysqli_query($link, $sql);
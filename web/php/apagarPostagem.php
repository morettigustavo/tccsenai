<?php
require_once('conexao.php'); 
$id_postagem = $_POST['id_postagem'];

$query = "UPDATE postagem SET ativa = 1 WHERE id_postagem = $id_postagem;";

$resposta = mysqli_query($link, $query);
<?php 
require_once('conexao.php');

$area = $_POST['area'];
$materia = $_POST['materia'];
$tags = $_POST['tags'];

$sql = "insert into postagem ()"
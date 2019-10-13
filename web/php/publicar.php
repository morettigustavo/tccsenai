<?php 
session_start();
require_once('conexao.php');

$titulo = $_POST['titulo'];
$area = $_POST['areaConhecimento'];
$materia = $_POST['materia'];
$tags = $_POST['tags'];

$id_user = $_SESSION['id_estudante'];
$nome = md5($_FILES['map']['name']);

$sql = "INSERT INTO postagem(id_estudante,id_materia,titulo_postagem,imagem_postagem) VALUES ($id_user,1,'$titulo','$nome')";
mysqli_query($link, $sql);

$sql = "SELECT id_postagem FROM postagem ORDER BY id_postagem DESC LIMIT 1;";
$resultado = mysqli_query($link, $sql);

$line = mysqli_fetch_array($resultado);
$id = $line['id_postagem'];

$pasta = "postagens/$id";
@mkdir($pasta, 0777);

$destino = "postagens/$id/" . md5($_FILES['map']['name']) . ".png";
 
$arquivo_tmp = $_FILES['map']['tmp_name'];
 
move_uploaded_file( $arquivo_tmp, $destino  );
?>
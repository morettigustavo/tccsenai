<?php 
session_start();
require_once('conexao.php');



$titulo = $_POST['titulo'];
$area = $_POST['area'];
$materia = $_POST['materia'];
$tags = $_POST['tags'];

$id_user = $_SESSION['id_estudante'];

$sql = "insert into postagem (id_estudante,id_materia,titulo) values ($id_user,1,'$titulo')";

mysqli_query($link, $sql);

$caminho = "postagens/";
@mkdir($caminho, 0777);
$name = "foto".$i;
    if(isset($_FILES[$name]['name'])){
    $foto = $_FILES[$name]['name'];
    move_uploaded_file($_FILES[$name]['tmp_name'], $pasta."/imagem$i.png");
}
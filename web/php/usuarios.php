<?php
session_start();
require_once('conexao.php');

$id_estudante = $_SESSION['id_estudante'];

$primeiro_nome = isset($_POST['primeiro_nome'])?$_POST['primeiro_nome']:"";
$segundo_nome = isset($_POST['segundo_nome'])?$_POST['segundo_nome']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$portifolio = isset($_POST['portifolio'])?$_POST['portifolio']:"";

$tipo = $_POST['tipo'];

if($tipo == "list"){
    $sql = "SELECT id_estudante,primeiro_nome_usuario, segundo_nome_usuario, portifolio_usuario, email_usuario FROM usuario WHERE id_estudante = $id_estudante";
    
    $query = mysqli_query($link, $sql);
    
    while($line = mysqli_fetch_array($query)){
        $line['primeiro_nome_usuario'] = utf8_encode($line['primeiro_nome_usuario']);
        $line['segundo_nome_usuario'] = utf8_encode($line['segundo_nome_usuario']);
        $line['portifolio_usuario'] = utf8_encode($line['portifolio_usuario']);
        $array = array('primeiro_nome' => $line['primeiro_nome_usuario'],'segundo_nome' => $line['segundo_nome_usuario'], 'portifolio' => $line['portifolio_usuario'], 'email' => $line['email_usuario']);
    }
    
    echo json_encode($array);
}else if($tipo == "atualizar"){
    $sql = "UPDATE usuario SET primeiro_nome_usuario = '$primeiro_nome', segundo_nome_usuario = '$segundo_nome', portifolio_usuario = '$portifolio' WHERE id_estudante = $id_estudante";
    $query = mysqli_query($link, $sql);
}
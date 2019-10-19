<?php
session_start();
require_once('conexao.php');

$id_estudante = $_SESSION['id_estudante'];

$primeiro_nome = isset($_POST['primeiro_nome'])?$_POST['primeiro_nome']:"";
$segundo_nome = isset($_POST['segundo_nome'])?$_POST['segundo_nome']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$portifolio = isset($_POST['portifolio'])?$_POST['portifolio']:"";
$data = isset($_POST["image"])?$_POST["image"]:"";

$tipo = $_POST['tipo'];

if($tipo == "list"){
    $sql = "SELECT id_estudante,primeiro_nome_usuario, segundo_nome_usuario, portifolio_usuario, email_usuario, imagem_usuario FROM usuario WHERE id_estudante = $id_estudante";
    
    $query = mysqli_query($link, $sql);
    
    while($line = mysqli_fetch_array($query)){
        $line['primeiro_nome_usuario'] = utf8_encode($line['primeiro_nome_usuario']);
        $line['segundo_nome_usuario'] = utf8_encode($line['segundo_nome_usuario']);
        $line['portifolio_usuario'] = utf8_encode($line['portifolio_usuario']);
        $array = array('id_estudante'=> $line['id_estudante'], 'primeiro_nome' => $line['primeiro_nome_usuario'],'segundo_nome' => $line['segundo_nome_usuario'], 'portifolio' => $line['portifolio_usuario'], 'email' => $line['email_usuario'], 'imagem_usuario' => $line['imagem_usuario']);
    }
    
    echo json_encode($array);
}else if($tipo == "atualizar"){
    $sql = "UPDATE usuario SET primeiro_nome_usuario = '$primeiro_nome', segundo_nome_usuario = '$segundo_nome', portifolio_usuario = '$portifolio' WHERE id_estudante = $id_estudante";
    $query = mysqli_query($link, $sql);
}else if($tipo == "trocarImagem"){$data = $_POST["image"];
    
    $image_array_1 = explode(";", $data);

    $image_array_2 = explode(",", $image_array_1[1]);
    $data = base64_decode($image_array_2[1]);
    
    $pasta = "usuarios/$id_estudante/";
    @mkdir($pasta, 0777);
    
    $name = md5(time());
    $imageName = $name . '.png';
    $destino = "usuarios/$id_estudante/$imageName";

    file_put_contents($destino, $data);
    
    $sql = "UPDATE usuario SET imagem_usuario = '$name' WHERE id_estudante = $id_estudante";
    echo $sql;
    $query = mysqli_query($link, $sql);
}
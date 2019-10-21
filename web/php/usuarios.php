<?php
session_start();
require_once('conexao.php');

$id_estudante = isset($_POST['id_estudante'])?$_POST['id_estudante']:$_SESSION['id_estudante'];

$id_estudante_seguidor = $_SESSION['id_estudante'];

$primeiro_nome = isset($_POST['primeiro_nome'])?$_POST['primeiro_nome']:"";
$segundo_nome = isset($_POST['segundo_nome'])?$_POST['segundo_nome']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$portifolio = isset($_POST['portifolio'])?$_POST['portifolio']:"";
$data = isset($_POST["image"])?$_POST["image"]:"";

$tipo = isset($_POST['tipo'])?$_POST['tipo']:"list";

if($tipo == "list"){
    $sql = "SELECT id_estudante,primeiro_nome_usuario, segundo_nome_usuario, portifolio_usuario, email_usuario, imagem_usuario FROM usuario WHERE id_estudante = $id_estudante";
    $query = mysqli_query($link, $sql);

    while($line = mysqli_fetch_array($query)){
        $id_estudante = $line['id_estudante'];

        $seguindo = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM seguidor WHERE seguidor = $id_estudante_seguidor AND seguido = $id_estudante"))['count(*)'];
        $qnt_seguindo =   mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM seguidor WHERE seguidor = $id_estudante"))['count(*)'];
        $qnt_seguidores = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM seguidor WHERE seguido  = $id_estudante"))['count(*)'];

        $array = array('id_estudante'=> $line['id_estudante'], 'primeiro_nome' => $line['primeiro_nome_usuario'],'segundo_nome' => $line['segundo_nome_usuario'], 'portifolio' => $line['portifolio_usuario'], 'email' => $line['email_usuario'], 'imagem_usuario' => $line['imagem_usuario'], 'seguindo' => $seguindo , 'id_user_logado' => $id_estudante_seguidor, 'qnt_seguindo' => $qnt_seguindo,'qnt_seguidores' => $qnt_seguidores);
    }
    
    echo json_encode($array);
}else if($tipo == "atualizar"){
    $sql = "UPDATE usuario SET primeiro_nome_usuario = '$primeiro_nome', segundo_nome_usuario = '$segundo_nome', portifolio_usuario = '$portifolio' WHERE id_estudante = $id_estudante";
    $query = mysqli_query($link, $sql);
}else if($tipo == "trocarImagem"){
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
    $query = mysqli_query($link, $sql);
}
<?php 
session_start();
if(!isset($_SESSION['id_estudante'])){
    echo "false";
}else{
    $nome = $_SESSION['primeiro_nome']." ".$_SESSION['segundo_nome'];
    $id = $_SESSION['id_estudante'];
    $dados[] = array("nome" => $nome, "id" => $id);
    $json = json_encode($dados);
    echo $json;
}
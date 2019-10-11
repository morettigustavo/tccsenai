<?php 
require_once('conexao.php');

$acao = $_GET['acao'];
$materia = isset($_GET['materia'])?$_GET['materia']:"";
$id_area = isset($_GET['id_area'])?$_GET['id_area']:0;

switch($acao){
    case "adicionar":
        $sql = "INSERT INTO materia(nome,id_area) VALUES ($materia, $id_area)";
    break;
    case "materias":
        $sql = "SELECT * FROM materia WHERE upper(nome) like '%$materia%'";
    break;
}

$query = mysqli_query($link, $sql);

if($acao = "materias"){
    $array = array();

    while($line = mysqli_fetch_array($query)){
        $line['nome']= utf8_encode($line['nome']);
        $array[] = array('id_materia' => $line['id_materia'], 'id_area' => $line['id_area'], 'nome' => $line['nome']);
    }

    echo json_encode($array);
}
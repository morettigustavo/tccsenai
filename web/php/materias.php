<?php 
require_once('conexao.php');

$acao = $_POST['acao'];
$materia = isset($_POST['materia'])?$_POST['materia']:"";
@$id_area = $_POST['id_area'];
$sql = "";

switch($acao){
    case "adicionar":
        $sql = "INSERT INTO materia(nome_materia,id_area) VALUES ($materia, $id_area)";
    break;
    case "materias":
        $sql = "SELECT * FROM materia";
        if(isset($id_area)){
            $sql .= " WHERE id_area = $id_area";
        }
    break;
}

// echo $sql;

$query = mysqli_query($link, $sql);

if($acao = "materias"){
    $array = array();

    while($line = mysqli_fetch_array($query)){
        $line['nome_materia']= utf8_encode($line['nome_materia']);
        $array[] = array('id_materia' => $line['id_materia'], 'id_area' => $line['id_area'], 'nome_materia' => $line['nome_materia']);
    }

    echo json_encode($array);
}
<?php 
require_once('conexao.php');

$materia = $_GET['materia']?$_GET['materia']:"";

$sql = "SELECT * FROM materia WHERE upper(nome) like '%$materia%'";

// echo $sql;

$query = mysqli_query($link, $sql);

$array = array();

while($line = mysqli_fetch_array($query)){
    // $nome = str_replace($line['nome'], " ", "_")
    $line['nome']= utf8_encode($line['nome']);
    $array[] = array('id_materia' => $line['id_materia'], 'id_area' => $line['id_area'], 'nome' => $line['nome']);
}

echo json_encode($array);
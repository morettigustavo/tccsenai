<?php 
session_start();
require_once('conexao.php');

//Valores da outra pagina chegam via POST
$titulo = $_POST['titulo'];
$area = $_POST['areaConhecimento'];
$materia = $_POST['materia'];
$tags_string = $_POST['tags'];

//Id do ususario logado na sessao
$id_user = $_SESSION['id_estudante'];
$nome = md5($_FILES['map']['name']);

//Pegar o id da materia, ou criar nova
$qnt_materias = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM materia WHERE nome_materia LIKE '%$materia%' AND id_area = $area"))['count(*)'];
if($qnt_materias == 0){
    $sql = "INSERT INTO materia (id_area, nome_materia) VALUES ($area, '$materia');";
    mysqli_query($link, $sql);
}
$id_materia = mysqli_fetch_array(mysqli_query($link, "SELECT id_materia FROM materia WHERE nome_materia LIKE '%$materia%' AND id_area = $area"))['id_materia'];

//Execucao do sql, inserindo postagem no banco de dados
$sql = "INSERT INTO postagem(id_estudante,id_materia,titulo_postagem,imagem_postagem) VALUES ($id_user,$id_materia,'$titulo','$nome')";
mysqli_query($link, $sql);

//Pega o id da iultima postagem
$sql = "SELECT id_postagem FROM postagem ORDER BY id_postagem DESC LIMIT 1;";
$resultado = mysqli_query($link, $sql);
$line = mysqli_fetch_array($resultado);
$id_post = $line['id_postagem'];

//Criação da pasta onde sera armazenada a imagem(mapa ou ficha de estudo)
$pasta = "postagens/$id_post";
@mkdir($pasta, 0777);
$destino = "postagens/$id_post/" . md5($_FILES['map']['name']) . ".png";

$arquivo_tmp = $_FILES['map']['tmp_name'];

move_uploaded_file($arquivo_tmp, $destino);


//Cadastrar tags
$tags_array = explode("#", $tags_string);

foreach($tags_array as $tag){
    if($tag != ""){
        $qnt_tag = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM tag WHERE nome_tag LIKE '$tag'"))['count(*)'];

        if($qnt_tag == 0){
            $sql = "INSERT INTO tag(nome_tag) VALUES ('$tag')";
            mysqli_query($link, $sql);
        }
        
        $id_tag = mysqli_fetch_array(mysqli_query($link, "SELECT id_tag FROM tag WHERE nome_tag LIKE '$tag'"))['id_tag'];
        
        $sql = "INSERT INTO tag_post (id_postagem, id_tag) VALUES ($id_post, $id_tag)";
        mysqli_query($link, $sql);
    }
}
?>
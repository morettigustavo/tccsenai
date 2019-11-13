<div class="container instagram" data-limit="12">
<?php
require_once('php/conexao.php');
$id_estudante = $_GET['id_estudante'];

$sql = "SELECT postagem.id_postagem, postagem.imagem_postagem FROM postagem WHERE id_estudante = $id_estudante";
$query = mysqli_query($link, $sql);

while($line = mysqli_fetch_array($query)){
    $id_postagem = $line['id_postagem'];
    $imagem = $line['imagem_postagem'];
?>
    
    <a class="image" style="background-image: url(php/postagens/<?php echo "$id_postagem/$imagem.png"?>)"></a>
                        
<?php } ?>
</div>
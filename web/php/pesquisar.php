<div class="container instagram" data-limit="12">
<?php
require_once('php/conexao.php');
$tags = $_GET['tags'];

$sql = "SELECT DISTINCT postagem.id_postagem, postagem.imagem_postagem, postagem.ativa FROM postagem
INNER JOIN tag_post on postagem.id_postagem = tag_post.id_postagem
INNER JOIN tag ON tag.id_tag = tag_post.id_tag 
WHERE tag.nome_tag LIKE '%$tags%' AND postagem.ativa = 0";

$query = mysqli_query($link, $sql);

while($line = mysqli_fetch_array($query)){
    $id_postagem = $line['id_postagem'];
    $imagem = $line['imagem_postagem'];
    
    $sql = "SELECT nome_tag FROM tag_post 
    INNER JOIN tag ON tag_post.id_tag = tag.id_tag
    WHERE id_postagem = $id_postagem";
    $query2 = mysqli_query($link, $sql);
    $tags = "";

    while($line2 = mysqli_fetch_array($query2)){
        $tags .= "#".$line2['nome_tag']." ";
    }
?>
    <a class="image" style="background-image: url(php/postagens/<?php echo "$id_postagem/$imagem.png"?>)" href="visitar_postagem.php?id_postagem=<?php echo $id_postagem;?>">
        <small><span><i class="icon ion-md-time"></i><?php echo $tags?></span></small>
    </a>
<?php } ?>
</div>
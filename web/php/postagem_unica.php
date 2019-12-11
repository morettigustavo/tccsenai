<?php
require_once('php/conexao.php');
$id_estudante = $_SESSION['id_estudante'];
$id_postagem = $_GET['id_postagem'];

$sql = "SELECT 
usuario.id_estudante,usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario, usuario.imagem_usuario,
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area
FROM postagem 
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante 
WHERE postagem.id_postagem = $id_postagem";

$query = mysqli_query($link, $sql);

while($line = mysqli_fetch_array($query)){
    $id_postagem = $line['id_postagem'];
    $id_estudante_post = $line['id_estudante'];
    
    $caminho = isset($line['imagem_usuario'])?"php/usuarios/".$id_estudante_post."/".$line['imagem_usuario'].".png":"img/usuario.png";
    $qnt_pos = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = 1"))['count(*)'];
    $qnt_neg = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = -1"))['count(*)'];
    $qnt_com = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM comentarios WHERE id_postagem = $id_postagem"))['count(*)'];
    $is_liked = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = 1 AND id_estudante = $id_estudante;"))['count(*)'];
    $is_unliked = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = -1 AND id_estudante = $id_estudante;"))['count(*)'];
    
    $sql = "SELECT nome_tag FROM tag_post 
    INNER JOIN tag ON tag_post.id_tag = tag.id_tag
    WHERE id_postagem = $id_postagem";
    $query2 = mysqli_query($link, $sql);
    $tags = "";

    while($line2 = mysqli_fetch_array($query2)){
        $tags .= "#".$line2['nome_tag']." ";
    }

    ?>

<section class="hero">
    <div class="cardbox shadow-lg bg-white">
        <div class="cardbox-heading">
            <!-- START dropdown-->
            <div class="dropdown float-right">
                <button class="btn btn-flat " type="button" data-toggle="dropdown" aria-expanded="false">
                    <em class="fa fa-ellipsis-h"></em>
                </button>
                <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"
                    style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Salvar</a>
                    <a class="dropdown-item" href="#">Denunciar</a>
                    <?php if($id_estudante == $id_estudante_post){
 ?>
                    <a class="dropdown-item" href="#">Apagar postagem</a>
<?php
                    }
                    ?>
                </div>
            </div>
            <!--/ dropdown -->
            <div class="media m-0">
                <div class="d-flex mr-3">
                    <a href="visitar_perfil.php?id_estudante=<?php echo $id_estudante_post?>"><img class="img-fluid rounded-circle" src="<?php echo $caminho;?>" alt="User"></a>
                </div>
                <div class="media-body">
                    <p class="m-0"><?php echo $line['primeiro_nome_usuario']." ". $line['segundo_nome_usuario']?></p>
                    <small><span><i class="icon ion-md-time"></i><?php echo $tags?></span></small>
                </div>
            </div>
            <!--/ media -->
        </div>
        <!--/ cardbox-heading -->
        <div class="container">
            <h1><?php echo $line['titulo_postagem']?></h1>
        </div>
        <div class="container cardbox-item">
            <img class="img-fluid" src="<?php echo "php/postagens/".$id_postagem."/".$line['imagem_postagem'].".png"?>" alt="Image" id="img<?php echo $id_postagem?>" onclick="img(<?php echo $id_postagem?>)">
        </div>
        <!--/ cardbox-item -->
        <div class="container cardbox-base">
            <ul>
                <li><a><i id="l_<?php echo $id_postagem?>"class="fa fa-thumbs-up curtida <?php if($is_liked){echo "liked";}?>"></i><em id="lt_<?php echo $id_postagem?>"><?php echo $qnt_pos?></em></a></li>
            </ul>
            <ul>
                <li><a><i id="d_<?php echo $id_postagem?>" class="fa fa-thumbs-down curtida <?php if($is_unliked){echo "liked";}?>"></i><em id="ld_<?php echo $id_postagem?>"><?php echo $qnt_neg?></em></a></li>
            </ul>
            <ul class="float-right">
                <li><a><i class="fa fa-comments"></i><em><?php echo $qnt_com?></em></a></li>
            </ul>
        </div>
        <?php 
            $sql = "SELECT usuario.imagem_usuario,usuario.id_estudante, comentarios.texto_comentario
            FROM comentarios
            INNER JOIN usuario ON comentarios.id_estudante = usuario.id_estudante
            WHERE id_postagem = $id_postagem";
            $query3 = mysqli_query($link, $sql);
            
            while($line3 = mysqli_fetch_array($query3)){
                $id_estudante_coment = $line3['id_estudante'];
                $caminho_coment = isset($line3['imagem_usuario'])?"php/usuarios/".$id_estudante_coment."/".$line3['imagem_usuario'].".png":"img/usuario.png";
                ?>
                <div class="container cont-comment">
            <div class="btnEnviar" style="display:inline;padding: 15px 10px 20px 10px;" >
                    <a href="visitar_perfil.php?id_estudante=<?php echo $id_estudante_coment?>"><img src="<?php echo $caminho_coment;?>" class="imgComment img-fluid rounded-circle"></a>
            </div>
            <input class="comment" type="text" readonly="readonly" value="<?php echo $line3['texto_comentario']?>">
        </div>
        <?php } ?>
        <!--/ cardbox-base --> 
        <div class="container cont-comment">
            <form class="formComent" id="f_<?php echo $id_postagem?>">
                <input placeholder="Escreva um comentário..." id="ci_<?php echo $id_postagem?>" class="comment" type="text">
                <button class="btnEnviar">
                    <i id="cb_<?php echo $id_postagem?>" class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
        <!--/ cardbox-like -->

    </div>
    <!--/ cardbox -->
</section>

<?php } ?>

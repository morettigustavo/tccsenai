<?php 
require_once('php/conexao.php');

$sql = "SELECT 
postagem.id_postagem, postagem.titulo_postagem, postagem.imagem_postagem,
materia.nome_materia,
area.nome_area,
usuario.primeiro_nome_usuario,usuario.segundo_nome_usuario
FROM postagem
INNER JOIN materia ON postagem.id_materia = materia.id_materia
INNER JOIN area ON materia.id_area = area.id_area
INNER JOIN usuario ON postagem.id_estudante = usuario.id_estudante";

$query = mysqli_query($link, $sql);

//JSON de retorno da postagem(Postagem em forma de um json facilita para o front end transformar em dados na tela)

$array = array();
while($line = mysqli_fetch_array($query)){
    $id_postagem = $line['id_postagem'];

    $qnt_pos = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = 1"))['count(*)'];
    $qnt_neg = mysqli_fetch_array(mysqli_query($link, "SELECT count(*) FROM curtidas WHERE id_postagem = $id_postagem AND tipo_curtida = -1;"))['count(*)'];
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
                </div>
            </div>
            <!--/ dropdown -->
            <div class="media m-0">
                <div class="d-flex mr-3">
                    <a href=""><img class="img-fluid rounded-circle" src="img/ana.png" alt="User"></a>
                </div>
                <div class="media-body">
                    <p class="m-0"><?php echo $line['primeiro_nome_usuario']." ". $line['segundo_nome_usuario']?></p>
                    <small><span><i class="icon ion-md-time"></i> 5 horas atrás</span></small>
                </div>
            </div>
            <!--/ media -->
        </div>
        <!--/ cardbox-heading -->
        <div class="container">
            <h1><?php echo $line['titulo_postagem']?></h1>
        </div>
        <div class="container cardbox-item">
            <img class="img-fluid" src="<?php echo "php/postagens/".$id_postagem."/".$line['imagem_postagem'].".png"?>" alt="Image" id="img1">
        </div>
        <!--/ cardbox-item -->
        <div class="container cardbox-base">
            <ul>
                <li><a><i class="fa fa-thumbs-up like"></i><em><?php echo $qnt_pos?></em></a></li>
            </ul>
            <ul>
                <li><a><i class="fa fa-thumbs-down deslike"></i><em><?php echo $qnt_neg?></em></a></li>
            </ul>
            <ul class="float-right">
                <li><a><i class="fa fa-comments comment"></i><em>12</em></a></li>
            </ul>
        </div>
        <!--/ cardbox-base -->
        <div class="cardbox-comments">
            <span class="comment-avatar float-left">
                <a href=""><img class="rounded-circle" src="img/ana.png" alt="..."></a>
            </span>
            <div class="search">
                <input placeholder="Escrever um comentario" type="text">
            </div>
            <!--/. Search -->
        </div>
        <!--/ cardbox-like -->

    </div>
    <!--/ cardbox -->
</section>

<?php } ?>




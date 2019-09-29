<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Feed</title>
    <?php require_once("geral/cabecalho.html");?>
    <link href="css/publi.css" rel="stylesheet">
    <link href="css/imgModal.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once("./geral/nav-bar.html");?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php require_once("geral/top-bar.html");?>

                <div class="container">
                    <section class="hero">
                        <div class="cardbox shadow-lg bg-white">
                            <div class="cardbox-heading">
                                <!-- START dropdown-->
                                <div class="dropdown float-right">
                                    <button class="btn btn-flat " type="button" data-toggle="dropdown"
                                        aria-expanded="false">
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
                                        <p class="m-0">Ana Luiza Furtado</p>
                                        <small><span><i class="icon ion-md-time"></i> 5 horas atrás</span></small>
                                    </div>
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ cardbox-heading -->
                            <div class="container"><h1>Hidrocarbonetos Ramificados</h1></div>
                            <div class="container cardbox-item">
                                <img class="img-fluid" src="img/mapa1.jpg" alt="Image" id="img1" onclick="img(1)">
                            </div>
                            <!--/ cardbox-item -->
                            <div class="cardbox-base">
                                <ul class="float-right">
                                    <li><a><i class="fa fa-comments"></i></a></li>
                                    <li><a><em class="mr-5">12</em></a></li>
                                </ul>
                                <ul>
                                    <li><a><i class="fa fa-thumbs-up ml-5"></i></a></li>
                                    <li><a><em>564</em></a></li>
                                </ul>
                                <ul>
                                    <li><a><i class="fa fa-thumbs-down" style="color: blue;"></i></a></li>
                                    <li><a><em>12</em></a></li>
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
                    <section class="hero">
                        <div class="cardbox shadow-lg bg-white">
                            <div class="cardbox-heading">
                                <!-- START dropdown-->
                                <div class="dropdown float-right">
                                    <button class="btn btn-flat " type="button" data-toggle="dropdown"
                                        aria-expanded="false">
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
                                        <p class="m-0">Daniella Fonseca</p>
                                        <small><span><i class="icon ion-md-time"></i> 3 dias atrás</span></small>
                                    </div>
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ cardbox-heading -->
                            <div class="container"><h1>Funções da Linguagem</h1></div>
                            <div class="container cardbox-item">
                                <img class="img-fluid" src="img/mapa2.jpg" alt="Image" id="img2" onclick="img(2)">
                            </div>
                            <!--/ cardbox-item -->
                            <div class="cardbox-base">
                                <ul class="float-right">
                                    <li><a><i class="fa fa-comments"></i></a></li>
                                    <li><a><em class="mr-5">2</em></a></li>
                                </ul>
                                <ul>
                                    <li><a><i class="fa fa-thumbs-up ml-5"></i></a></li>
                                    <li><a><em>27</em></a></li>
                                </ul>
                                <ul>
                                    <li><a><i class="fa fa-thumbs-down" style="color: blue;"></i></a></li>
                                    <li><a><em>36</em></a></li>
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
                    
                </div>
                
            </div>
            <!-- End of Main Content -->

            <?php require_once("geral/rodape.html");?>

        </div>


        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content-img modal-content" id="img01">
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            // var img = document.getElementsByClassName("img");
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            // img.onclick;

            function img(src) {
                console.log(src);
                console.log("img" + src);
                var img = document.getElementById("img" + src);
                modal.style.display = "block";
                modalImg.src = img.src;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }
        </script>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Floating Button Adicionar -->
    <div class="menu pmd-floating-action" role="navigation">
        <a class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary"
            data-title="Adicionar Publicação" href="publicar.html">
            <span class="pmd-floating-hidden">Primary</span>
            <i class="material-icons pmd-sm">create</i>
        </a>
    </div>    

    <?php require_once("geral/js.html");?>
</body>

</html>
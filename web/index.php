<?php 
session_start();
if(!isset($_SESSION['id_estudante'])){ ?>
    <script>window.location.href = "login.html";</script>
<?php }else{
    $nome = $_SESSION['primeiro_nome']." ".$_SESSION['segundo_nome'];
    $id = $_SESSION['id_estudante'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feed</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/publi.css" rel="stylesheet">

    <!-- Propeller -->
    <link href="css/propeller/floating_button.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="img/LOGO.png" width="100%">
                </div>
                <div class="sidebar-brand-text mx-3">Go Study</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Matérias
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <span>HUMANAS</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Portugês</a>
                        <a class="collapse-item" href="#">Arte</a>
                        <a class="collapse-item" href="#">História</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>EXATAS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Física</a>
                        <a class="collapse-item" href="#">Química</a>
                        <a class="collapse-item" href="#">Matemática</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <span>BIOLÓGICAS</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Física</a>
                        <a class="collapse-item" href="#">Química</a>
                        <a class="collapse-item" href="#">Matemática</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Pesquisar por..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Pesquisar por..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nome;?></span>
                                <img class="img-profile rounded-circle" src="img/perfil_img.jpg" width="60" height="60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configurações
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Sair
                                </a>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container">
                    <section class="hero">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 offset-lg-3">

                                    <div class="cardbox shadow-lg bg-white">

                                        <div class="cardbox-heading">
                                            <!-- START dropdown-->
                                            <div class="dropdown float-right">
                                                <button class="btn btn-flat btn-flat-icon" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <em class="fa fa-ellipsis-h"></em>
                                                </button>
                                                <div class="dropdown-menu dropdown-scale dropdown-menu-right"
                                                    role="menu"
                                                    style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="#">Salvar</a>
                                                    <a class="dropdown-item" href="#">Denunciar</a>
                                                </div>
                                            </div>
                                            <!--/ dropdown -->
                                            <div class="media m-0">
                                                <div class="d-flex mr-3">
                                                    <a href=""><img class="img-fluid rounded-circle"
                                                            src="img/perfil_img.jpg"
                                                            alt="User"></a>
                                                </div>
                                                <div class="media-body">
                                                    <p class="m-0">Benjamin Robinson</p>
                                                    <small><span><i class="icon ion-md-time"></i> 10 hours
                                                            ago</span></small>
                                                </div>
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ cardbox-heading -->

                                        <div class="cardbox-item">
                                            <img class="img-fluid" src="img/menina.jpg" alt="Image">
                                        </div>
                                        <!--/ cardbox-item -->
                                        <div class="cardbox-base">
                                            <ul class="float-right">
                                                <li><a><i class="fa fa-comments"></i></a></li>
                                                <li><a><em class="mr-5">12</em></a></li>
                                                <li><a><i class="fa fa-share-alt"></i></a></li>
                                                <li><a><em class="mr-3">03</em></a></li>
                                            </ul>
                                            <ul>
                                                <li><a><i class="fa fa-thumbs-up"></i></a></li>
                                            </ul>
                                        </div>
                                        <!--/ cardbox-base -->
                                        <div class="cardbox-comments">
                                            <span class="comment-avatar float-left">
                                                <a href=""><img class="rounded-circle"
                                                        src="img/comentario.jpg"
                                                        alt="..."></a>
                                            </span>
                                            <div class="search">
                                                <input placeholder="Escrever um comentario" type="text">
                                                <button><i class="fa fa-camera"></i></button>
                                            </div>
                                            <!--/. Search -->
                                        </div>
                                        <!--/ cardbox-like -->

                                    </div>
                                    <!--/ cardbox -->

                                </div>
                                <!--/ col-lg-6 -->
                            </div>
                            <!--/ row -->
                        </div>
                        <!--/ container -->
                    </section>
                    <section class="hero">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 offset-lg-3">

                                    <div class="cardbox shadow-lg bg-white">

                                        <div class="cardbox-heading">
                                            <!-- START dropdown-->
                                            <div class="dropdown float-right">
                                                <button class="btn btn-flat btn-flat-icon" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <em class="fa fa-ellipsis-h"></em>
                                                </button>
                                                <div class="dropdown-menu dropdown-scale dropdown-menu-right"
                                                    role="menu"
                                                    style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="#">Salvar</a>
                                                    <a class="dropdown-item" href="#">Denunciar</a>
                                                </div>
                                            </div>
                                            <!--/ dropdown -->
                                            <div class="media m-0">
                                                <div class="d-flex mr-3">
                                                    <a href=""><img class="img-fluid rounded-circle"
                                                            src="img/perfil_img.jpg"
                                                            alt="User"></a>
                                                </div>
                                                <div class="media-body">
                                                    <p class="m-0">Benjamin Robinson</p>
                                                    <small><span><i class="icon ion-md-time"></i> 10 hours
                                                            ago</span></small>
                                                </div>
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ cardbox-heading -->

                                        <div class="cardbox-item">
                                            <img class="img-fluid"
                                                src="img/menina.jpg"
                                                alt="Image">
                                        </div>
                                        <!--/ cardbox-item -->
                                        <div class="cardbox-base">
                                            <ul class="float-right">
                                                <li><a><i class="fa fa-comments"></i></a></li>
                                                <li><a><em class="mr-5">12</em></a></li>
                                                <li><a><i class="fa fa-share-alt"></i></a></li>
                                                <li><a><em class="mr-3">03</em></a></li>
                                            </ul>
                                            <ul>
                                                <li><a><i class="fa fa-thumbs-up"></i></a></li>
                                            </ul>
                                        </div>
                                        <!--/ cardbox-base -->
                                        <div class="cardbox-comments">
                                            <span class="comment-avatar float-left">
                                                <a href=""><img class="rounded-circle"
                                                        src="img/comentario.jpg"
                                                        alt="..."></a>
                                            </span>
                                            <div class="search">
                                                <input placeholder="Escreva um comentario" type="text">
                                                <button><i class="fa fa-camera"></i></button>
                                            </div>
                                            <!--/. Search -->
                                        </div>
                                        <!--/ cardbox-like -->

                                    </div>
                                    <!--/ cardbox -->

                                </div>
                                <!--/ col-lg-6 -->
                            </div>
                            <!--/ row -->
                        </div>
                        <!--/ container -->
                    </section>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Floating Button Adicionar -->
    <div class="menu pmd-floating-action"  role="navigation">
            <a class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" data-title="Adicionar Publicação" href="publicar.html"> 
                <span class="pmd-floating-hidden">Primary</span>
                <i class="material-icons pmd-sm">create</i> 
            </a> 
        </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" onclick="sair()">Sair</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery.js"></script>
    <script src="vendor/bootstrap.bundle.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery.easing.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>
    <script>
        function sair(){
            jQuery.ajax({
            url: "php/sair.php",
            success: function (retorno) {
                window.location.href = "index.php";
            }
        });
        }
    </script>
</body>

</html>
<?php } ?>
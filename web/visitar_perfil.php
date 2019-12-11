<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Perfil</title>
    <?php require_once("geral/cabecalho.html");?>

    <!-- Perfil css -->
    <link href="css/perfil.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php require_once("geral/nav-bar.html");?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php require_once("geral/top-bar.html");?>
                <!-- Perfil -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <a href="javascript:history.back()"><i class="fas fa-undo" style="font-size: 1.5em"></i></a>
                                        <p class="card-category h1" style="display: inline;font-size: 1.5em;">Perfil</p>
                                    </div>
                                    <div class="card-body">
                                            <div class="row">
                                                <div id="div_img_perfil" class="d-flex mx-auto justify-content-center align-items-center div_img_perfil">
                                                    <div id="img_perfil" class="img_visita rounded-circle"></div>
                                                    <i id="camera_perfil" class="fas fa-camera camera_perfil"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <!-- <div class="mx-auto">
                                                </div> -->
                                                <div id="seguidores" class="col-md-4 font-weight-bold text-center pt-2"><label></label></div>
                                                <div class="d-flex flex-column col-md-4">
                                                    <div class=" font-weight-bold text-center"><button id="btnPubli"class="btn btn-success">Publicações</button></div>
                                                    <div class="font-weight-bold text-center mt-2"><button id="btnSeguir" class="btn"></button></div>
                                                </div>
                                                <div id="seguindo" class="col-md-4 font-weight-bold text-center pt-2"></div>
                                            </div>
                                            <hr class="sidebar-divider">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Primeiro nome</label>
                                                        <input type="text" id="primeiro_nome" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Segundo nome</label>
                                                        <input type="text" id="segundo_nome" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Endereço de email</label>
                                                        <input type="email" id="email"class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Portifólio</label>
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" id="portifolio" readonly>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
                <!-- Fim perfil -->
            </div>
            <!-- End of Main Content -->

            <?php require_once("geral/rodape.html");?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    
    <?php require_once("geral/js.html");?>
</body>
<script src="js/visitar_perfil.js"></script>
</html>
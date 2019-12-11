<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Perfil</title>
    <?php require_once("geral/cabecalho.html");?>

    <!-- Perfil css -->
    <link href="css/perfil.css" rel="stylesheet">
    <link href="css/croppie.css" rel="stylesheet">
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
                                        <a href="javascript:history.back()"><i class="fas fa-undo" style="font-size: 1.5em" ></i></a>
                                        <p class="card-category h1" style="display: inline;font-size: 1.5em;">Perfil</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div id="div_img_perfil" class="d-flex mx-auto justify-content-center align-items-center div_img_perfil">
                                                    <div id="img_perfil" class="img_perfil rounded-circle"></div>
                                                    <i id="camera_perfil" class="fas fa-camera camera_perfil"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <!-- <div class="mx-auto">
                                                </div> -->
                                                <div id="seguidores" class="col-md-4 font-weight-bold text-center pt-2"></div>
                                                <div class="col-md-4 font-weight-bold text-center"><button class="btn btn-success">Publicações</button></div>
                                                <div id="seguindo" class="col-md-4 font-weight-bold text-center pt-2"></div>
                                            </div>
                                            <hr class="sidebar-divider">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Primeiro nome</label>
                                                        <input type="text" id="primeiro_nome" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Segundo nome</label>
                                                        <input type="text" id="segundo_nome" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Endereço de email</label>
                                                        <input type="email" id="email"class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Portifólio</label>
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" id="portifolio">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id= "btnAtualizar" type="button" class="btn btn-primary pull-right">Atualizar perfil</button>
                                            <div class="clearfix"></div>
                                        </form>
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
    <script src="js/perfil.js"></script>
    <script src="vendor/croppie.js"></script>
</body>

</html>

<div class="modal fade" id="insertimageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Trocar foto de perfil</h5>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                <div class="custom-file">
                    <input type="file" name="insert_image" id="insert_image" accept="image/*" class="custom-file-input"/>
                    <label class="custom-file-label" for="insert_image">Escolher foto de perfil</label>
                </div>
                    <div id="image_demo" class="container" style="width:350px; margin-top:30px"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button id="btnEnviar" class="btn btn-primary crop_image">Trocar</button>
            </div>
        </div>
    </div>
</div>
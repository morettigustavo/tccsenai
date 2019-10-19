<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Feed</title>
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
                                        <p class="card-category h1">Perfil</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="mx-auto img_perfil rounded-circle" style="background-image: url(img/ana.png)"></div>
                                            </div>
                                            <div class="row mt-4">
                                                <!-- <div class="mx-auto">
                                                </div> -->
                                                <div id="seguidores" class="col-md-4 font-weight-bold text-center pt-2">100 seguidores</div>
                                                <div class="col-md-4 font-weight-bold text-center"><button class="btn btn-success">Publicações</button></div>
                                                <div id="seguindo" class="col-md-4 font-weight-bold text-center pt-2">200 seguindo</div>
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
                                            <button id= "btnEnviar" type="button" class="btn btn-primary pull-right">Atualizar perfil</button>
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
</body>

</html>
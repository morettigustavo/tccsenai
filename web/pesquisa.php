<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Pesquisa</title>
    <?php require_once("geral/cabecalho.html");?>
    
    <link href="css/publi.css" rel="stylesheet">
    <link href="css/publicacoes.css" rel="stylesheet">
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

                <div class="content">
                 <?php require_once("php/pesquisar.php");?>
                </div>
            </div>
            <!-- End of Main Content -->

            <?php require_once("geral/rodape.html");?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php require_once("geral/js.html");?>
    <script src="js/fotos.js"></script>
</body>

</html>

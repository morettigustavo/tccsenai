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
                <?php require_once("postagem.html");?>
                </div>
                
            </div>
            <!-- End of Main Content -->

            <?php require_once("geral/rodape.html");?>

        </div>


        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content-img modal-content" id="img01">
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Floating Button Adicionar -->
    <div class="menu pmd-floating-action" role="navigation">
        <a class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary"
            data-title="Adicionar Publicação" href="publicar.php">
            <span class="pmd-floating-hidden">Primary</span>
            <i class="material-icons pmd-sm">create</i>
        </a>
    </div>    


    <?php require_once("geral/js.html");?>
    <script src="js/modalFeed.js"></script>
<script>
    jQuery("i.like").click(function(){
        console.log();
        if("rgb(0, 0, 255)" == $(this).css('color')){
            $(this).css("color", "");
        }else{
            $(this).css("color", "blue");
        }
        // console.log($(this).css("color", ""));
    });
</script>
</body>

</html>
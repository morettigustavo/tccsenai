<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Publicar</title>
    <?php require_once("geral/cabecalho.html");?>
    <link rel="stylesheet" href="css/jquery-ui.css">

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

                <!-- Content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="formPostar">
                                            <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating" for="titulo">Título</label>
                                                            <input type="text" class="form-control" name="titulo" id="titulo">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="form-group mx-auto mt-3">
                                                    <label for="map">Selecione seu mapa mental/ficha de estudo</label>
                                                    <input type="file" class="form-control-file" id="map" name="map">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mx-auto mt-3">
                                                    <img class="img-fluid" id="imagem">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Área do conhecimento</label>
                                                        <select id="areaConhecimento" name="areaConhecimento" class="form-control">
                                                            <option value="0">Selecionar</option>
                                                            <option value="1">Ciências Humanas</option>
                                                            <option value="2">Ciências da Natureza</option>
                                                            <option value="3">Linguagens e Códigos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating" for="materia">Matéria</label>
                                                        <input type="text" class="form-control auto_complete" id="materia" name="materia">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating" for="tags">Tags</label>
                                                        <input type="text" class="form-control" id="tags" name="tags">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">Publicar</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <!-- Content -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php require_once("geral/rodape.html");?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
    </div>
    <!-- End of Page Wrapper -->

    <?php require_once("geral/js.html");?>
    <script src="js/publicar.js"></script>
    <script src="vendor/jquery-ui.js"></script>
<script>
$( function() {
    var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
    ];
    $( "#materia" ).autocomplete({
        source: availableTags
    });
});
</script>
</body>

</html>

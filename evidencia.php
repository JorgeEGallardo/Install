<?php include "ext/header.php" ?>
<?php include "ext/navbar.php" ?>
<?php include "ext/usConfirm.php" ?>
<div class="d-flex" id="wrapper" style="height:100%">

    <!-- Sidebar -->
    <div class="bg-light border-right" style="height:100%" id="sidebar-wrapper">
        <div class="sidebar-heading"><?php echo $user; ?></div>
        <div class="list-group list-group-flush">
            <?php include "ext/sidebar.php" ?>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container" style="width:100%">
            <form method="POST" enctype="multipart/form-data" action="scripts/insertEvidence.php">

                <div class="form-group">
                    <label for="exampleInputEmail1">Evento</label>
                    <select class="form-control" name="event" required>
                        <?php include "scripts/getEventByUser.php"?>
                    </select>

                    <label for="exampleInputEmail1">Evidencia 1</label>
                    <div class="custom-file">
                        <input required name="evidence1" type="file" onChange="document.getElementById('evidencia1').innerHTML='Archivo cargado';" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" id="evidencia1" for="customFileLang">Seleccionar Archivo</label>
                    </div>

                    <label for="exampleInputEmail1">Evidencia 2</label>
                    <div class="custom-file">
                        <input required name="evidence2" type="file" onChange="document.getElementById('evidencia2').innerHTML='Archivo cargado';" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" id="evidencia2" for="customFileLang">Seleccionar Archivo</label>
                    </div>

                    <label for="exampleInputEmail1">Evidencia 3</label>
                    <div class="custom-file">
                        <input required type="file" name="evidence3" onChange="document.getElementById('evidencia3').innerHTML='Archivo cargado';" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" id="evidencia3" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                    <button class="btn btn-success" style="width:80%;margin-left:8%;margin-top:4%">Subir evidencias</button>
                </div>
            </form>
        </div>
        <div id="main" style="margin-top:4%"></div>
    </div>
    <?php include "ext/footer.php" ?>
    <script src="js/index.js"></script>
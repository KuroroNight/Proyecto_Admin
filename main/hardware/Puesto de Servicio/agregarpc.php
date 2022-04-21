<?php
require_once '../../../config/global.php';

define('RUTA_INCLUDE', '../../../'); //ajustar a necesidad
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo PAGE_TITLE ?></title>


    <?php getTopIncludes(RUTA_INCLUDE) ?>
</head>

<body id="page-top">

<?php getNavbar() ?>

<div id="wrapper">

    <?php getSidebar() ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Software</li>
                    <li class="breadcrumb-item active" aria-current="page">Añadir software</li>
                </ol>
            </nav>

            <!-- Page Content -->

            <div class="row mb-5">
                <div class="col">
                    <button type="submit" class="btn btn-success" disabled>Añadir</button>
                </div>
                <div class="col text-right">
                    <a href="index.php" class="btn btn-link">Cancelar</a>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre de pc</label>
                    <input type="text" name="text" class="form-control"
                           placeholder="Nombre pc">
                </div>
                <div class="form-group col-md-6">
                    <label>MAC</label>
                    <input type="text" name="date" class="form-control"
                           placeholder="Fecha">
                </div>

                <div class="form-group col-md-6">
                    <label>Localizacion</label>
                    <input type="text" name="date" class="form-control"
                           placeholder="Fechafin">
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <?php getFooter() ?>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php getModalLogout() ?>

<?php getBottomIncudes(RUTA_INCLUDE) ?>
</body>

</html>

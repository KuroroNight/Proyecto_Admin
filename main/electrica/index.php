<?php
require_once '../../config/global.php';


define('RUTA_INCLUDE', '../../'); //ajustar a necesidad
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

    <?php getTopIncludes(RUTA_INCLUDE ) ?>
</head>

<body id="page-top">

<?php getNavbar() ?>

<div id="wrapper">

    <?php getSidebar() ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Page Content -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Electricas</li>
                    <li class="breadcrumb-item active" aria-current="page"> </li>
                </ol>
            </nav>

            <div class="row my-3">
                <div class="col text-right">
                    <a class="btn btn-primary" href=".php">Crear uno nuevo</a>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabla con los </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Start date</th>
                                <th>Finish date</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Start date</th>
                                <th>Finish date</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-link btn-sm">Editar</a> <a href="#" class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-link btn-sm">Editar</a> <a href="#" class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-link btn-sm">Editar</a> <a href="#" class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-link btn-sm">Editar</a> <a href="#" class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="#" class="btn btn-link btn-sm">Editar</a> <a href="#" class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
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

<?php getBottomIncudes( RUTA_INCLUDE ) ?>
</body>

</html>

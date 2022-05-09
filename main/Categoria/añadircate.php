<?php
require_once '../../config/global.php';
require '../../config/db.php';

/*
$id_usuario = $_SESSION['id_usuario'];

$sql = "select * from hardware where id = '$id_usuario'";

$resultado = mysqli_query($db, $sql);


if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)){

    }
}

*/

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
                    <li class="breadcrumb-item">Categoria</li>
                    <li class="breadcrumb-item active" aria-current="page">Añadir Categoria</li>
                </ol>
            </nav>

            <!-- Page Content -->
            <form action="add-category.php" method="post" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id_estado" value="<//?php echo $id_estado ?>" />-->
                <div class="row mb-5">
                    <div class="col">
                        <button type="submit" class="btn btn-success" >Añadir</button>
                    </div>
                    <div class="col text-right">
                        <a href="index.php" class="btn btn-link">Cancelar</a>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control"
                               placeholder="Nombre">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status</label>
                        <input type="text" name="text2" class="form-control"
                               placeholder="status">
                    </div>
                </div>
            </form>
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

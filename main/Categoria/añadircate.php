<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id = '';
$name = '';
$stat = '';


if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from categoria where id_categoria = $id";
    $resultado = mysqli_query($db, $sql);


    if ($resultado) {
        $fila2 = mysqli_fetch_assoc($resultado);
        $name = $fila2['nombre'];
        $stat = $fila2['status'];

    }
}

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
                <input type="hidden" name="id" value="<?php echo $id?>" />
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
                               placeholder="Nombre" value="<?php echo $name?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status</label>
                        <input type="text" name="text2" class="form-control"
                               placeholder="status" value="<?php echo $stat?>">
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

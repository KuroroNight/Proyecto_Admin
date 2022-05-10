<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id_usuario = '';
$name = '';
$pass = '';
$rol = '';
$stat = '';

if (!empty($_GET['id'])) {
    $id_usuario = $_GET['id'];
    $sql = "select * from usuarios where id_usuario = $id_usuario";
    $resultado = mysqli_query($db, $sql);


    if ($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        $name = $fila['nombre'];
        $pass = $fila['contrasena'];
        $rol = $fila['rol'];
        $stat = $fila['status'];

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
                    <li class="breadcrumb-item">Usuario</li>
                    <li class="breadcrumb-item active" aria-current="page">Añadir Usuario</li>
                </ol>
            </nav>

            <!-- Page Content -->
            <form action="add-user.php" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="id_usuario" value="<?php echo $id_usuario?>" />
                <div class="row mb-5">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Añadir</button>
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
                        <label>Contraseña</label>
                        <input type="password" name="pass" class="form-control"
                               placeholder="Contraseña" value="<?php echo $pass ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Rol</label>
                        <SELECT NAME="rol_id" id="rol" class="form-control" value="<?php echo $rol ?>" >
                            <option>Selecciona un opcion</option>
                            <option value="1">Usuario administrador</option>
                            <option value="2">Usuario normal</option>
                        </SELECT>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Status</label>
                        <input type="text" name="stat" class="form-control"
                               placeholder="Status" value="<?php echo $stat ?>">
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


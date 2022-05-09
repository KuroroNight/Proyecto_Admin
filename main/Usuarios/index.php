<?php
require_once '../../config/global.php';
require '../../config/db.php';
$sql = "Select * from usuarios";
$resultado = mysqli_query($db, $sql);

$usuarios = array();

if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $usuarios[] = $fila;
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
                    <li class="breadcrumb-item">Usuarios</li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios </li>
                </ol>
            </nav>

            <div class="row my-3">
                <div class="col text-right">
                    <a class="btn btn-primary" href="añadirUsuario.php">Añadir uno nuevo</a>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabla con los Usuarios</h6>
                </div>
                <?php
                if (count($usuarios) > 0){
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php
                        $contador = 0;
                        foreach ($usuarios as $p) {
                            ?>
                            <tr>
                                <td><?php echo ++$contador ?></td>
                                <td><?php echo $p['nombre'] ?></td>
                                <td><?php echo $p['contrasena'] ?></td>
                                <td><?php
                                    if($p['rol'] == 1){
                                        echo "Admin";
                                    }else{
                                        echo "Normal";
                                    }?></td>
                                <td><?php echo $p['status'] ?></td>
                                <td><a href=".php?id=<?php echo $p['id_usuario'] ?>""
                                    class="btn btn-link btn-sm">Editar</a> <a
                                        href="borraruser.php?id=<?php echo $p['id_usuario'] ?>"
                                        class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                    <?php
                    } else {
                        echo "<h4 class ='text-center'>No hay Usuarios </h4>";
                    }
                    ?>
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

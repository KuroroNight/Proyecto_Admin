<?php
require_once '../../config/global.php';

require '../../config/db.php';
$sql = "Select * from empleados";
$resultado = mysqli_query($db, $sql);

if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $empleado[] = $fila;
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
                    <li class="breadcrumb-item">Hardware</li>
                    <li class="breadcrumb-item active" aria-current="page"> </li>
                </ol>
            </nav>

            <div class="row my-3">
                <div class="col text-right">
                    <a class="btn btn-primary" href="agregar.php">Crear uno nuevo</a>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabla con los empleados</h6>
                </div>
                <?php
                if (count($empleado) > 0){
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>cargo</th>
                            <th>email</th>
                            <th>telefono</th>
                            <th>usuario</th>
                            <th>departamento</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>cargo</th>
                            <th>email</th>
                            <th>telefono</th>
                            <th>usuario</th>
                            <th>departamento</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php
                        $contador = 0;
                        foreach ($empleado as $p) {
                                $id = $p['id_empleado'];
                            ?>
                            <tr>
                                <td><?php echo ++$contador ?></td>
                                <td><?php echo $p['nombre'] ?></td>
                                <td><?php echo $p['cargo'] ?></td>
                                <td><?php echo $p['email'] ?></td>
                                <td><?php echo $p['telefono'] ?></td>
                                <td><?php echo $p['usuario'] ?></td>
                                <td><?php echo $p['departamento'] ?></td>
                                <td><a href="agregar.php?id=<?php echo $id ?>""
                                    class="btn btn-link btn-sm">Editar</a> <a
                                            href="deleteemploy.php?id=<?php echo $id ?>"
                                            class="btn btn-link btn-sm">Eliminar</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                    <?php
                    } else {
                        echo "<h4 class ='text-center'>No hay empleados </h4>";
                    }
                    ?>
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

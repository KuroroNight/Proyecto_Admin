<?php
require_once '../../config/global.php';
require '../../config/db.php';

//config db
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
                    <li class="breadcrumb-item">Software</li>
                    <li class="breadcrumb-item active" aria-current="page">Añadir Dispositivo</li>
                </ol>
            </nav>

            <!-- Page Content -->
            <form action="add-device.php" method="post" enctype="multipart/form-data">
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
                    <label>Marca</label>
                    <input type="text" name="marca" class="form-control"
                           placeholder="Marca">
                </div>

                <div class="form-group col-md-6">
                    <label>Modelo</label>
                    <input type="text" name="modelo" class="form-control"
                           placeholder="Modelo">
                </div>

                <div class="form-group col-md-6">
                    <label>Funcion</label>
                    <input type="text" name="fun" class="form-control"
                           placeholder="Funcion">
                </div>

                <div class="form-group col-md-6">
                    <label>Encargado</label>
                    <?php
                    $query = "Select nombre    from empleados";
                    $resutl = mysqli_query($db, $query);

                    if ($resutl) {
                        while ($fila = mysqli_fetch_assoc($resutl)) {
                            $empleado[] = $fila;
                        }
                    }

                    if (count($empleado) > 0) {
                        ?>
                        <Select name="enc" class="form-control">
                            <?php
                            $contador = 0;
                            foreach ($empleado
                                     as $p) {
                                ++$contador
                                ?>
                                <option><?php echo $p['nombre'] ?></option>
                                <?php
                            }
                            ?>
                        </Select>
                        <?php
                    }
                    ?>
                </div>

                <div class="form-group col-md-6">
                    <label>Categoria</label>
                    <?php
                    $query = "Select nombre from categoria";
                    $resutl2 = mysqli_query($db, $query);

                    if ($resutl) {
                        while ($fila = mysqli_fetch_assoc($resutl2)) {
                            $cate[] = $fila;
                        }
                    }

                    if (count($empleado) > 0) {
                        ?>
                        <Select name="cat" class="form-control">
                            <?php
                            $contador = 0;
                            foreach ($cate
                                     as $p) {
                                ++$contador
                                ?>
                                <option><?php echo $p['nombre'] ?></option>
                                <?php
                            }
                            ?>
                        </Select>
                        <?php
                    }
                    ?>
                </div>


                <div class="form-group col-md-6">
                    <label>Area</label>
                    <?php
                    $query = "Select nombre from area";
                    $resutl2 = mysqli_query($db, $query);

                    if ($resutl) {
                        while ($fila = mysqli_fetch_assoc($resutl2)) {
                            $area[] = $fila;
                        }
                    }

                    if (count($empleado) > 0) {
                        ?>
                        <Select name="area" class="form-control">
                            <?php
                            $contador = 0;
                            foreach ($area
                                     as $p) {
                                ++$contador
                                ?>
                                <option><?php echo $p['nombre'] ?></option>
                                <?php
                            }
                            ?>
                        </Select>
                        <?php
                    }
                    ?>
                </div>

                <div class="form-group col-md-6">
                    <label>Numero de conexiones</label>
                    <input type="number" name="Conex" class="form-control"
                           placeholder="Numero de conexciones">
                </div>


                <div class="form-group col-md-6">
                    <label>Software</label>
                    <?php
                    $query = "Select licencia from software";
                    $resutl2 = mysqli_query($db, $query);

                    if ($resutl) {
                        while ($fila = mysqli_fetch_assoc($resutl2)) {
                            $soft[] = $fila;
                        }
                    }

                    if (count($empleado) > 0) {
                        ?>
                        <Select name="soft" class="form-control">
                            <?php
                            $contador = 0;
                            foreach ($soft
                                     as $p) {
                                ++$contador
                                ?>
                                <option><?php echo $p['licencia'] ?></option>
                                <?php
                            }
                            ?>
                        </Select>
                        <?php
                    }
                    ?>
                </div>


                <div class="form-group col-md-6">
                    <label>Status</label>
                    <input type="text" name="stat" class="form-control"
                           placeholder="Status">
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

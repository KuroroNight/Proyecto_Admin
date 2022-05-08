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
$query = "Select id_usuario from usuarios";
$resutl = mysqli_query($db, $query);

if ($resutl) {
    while ($fila = mysqli_fetch_assoc($resutl)) {
        $usuario[] = $fila;
    }
}


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
                    <li class="breadcrumb-item active" aria-current="page">Añadir Dispositivo</li>
                </ol>
            </nav>

            <!-- Page Content -->
            <form action="add.php" method="post" enctype="multipart/form-data">
                <!-- <input type="hidden" name="id_estado" value="<//?php echo $id_estado ?>" />-->
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
                               placeholder="Nombre">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Cargo</label>
                        <input type="text" name="cargo" class="form-control"
                               placeholder="Cargo">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"
                               placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Telefono</label>
                        <input type="number" name="phone" class="form-control"
                               placeholder="telefono">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Usuario</label>
                        <?php
                        if (count($usuario) > 0) {
                            ?>
                            <Select name="user" class="form-control">
                                <?php
                                $contador = 0;
                                foreach ($usuario
                                         as $p) {
                                    ++$contador
                                    ?>
                                    <option><?php echo $p['id_usuario'] ?></option>
                                    <?php
                                }
                                ?>
                            </Select>
                            <?php
                        }
                        ?>
                    </div>


                    <div class="form-group col-md-6">
                        <label>Departamento</label>
                        <input type="text" name="dept" class="form-control"
                               placeholder="Departamento">
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
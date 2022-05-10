<?php
session_start();

define('RUTA_INCLUDE', '../'); //ajustar a necesidad
?>
<!DOCTYPE html>
<html lang="es">


<title>Administracion</title>

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template-->
<link href="../css/sb-admin-2.css" rel="stylesheet">


<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">


                <div class=" ow">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                            </div>
                            <form action="login.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                           id="user" name="user" placeholder="Ingresar Usuario">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control form-control-user"
                                           id="contraseña" placeholder="Contraseña">
                                </div>

                                <button class="btn btn-primary btn-user btn-block" type="submit"> Login</button>
                                <!--Alerta error de datos-->
                                <?php
                                if (isset($_SESSION['login_error']) == true && $_SESSION['login_error'] == 1) {
                                    $_SESSION['login_error'] = 0;
                                    ?>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger">Usuario o contraseña incorrecta</div>
                                        </div>
                                    </div>

                                    <?php
                                }
                                ?>
                                <!--Termina alerta error de datos-->
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>

</html>


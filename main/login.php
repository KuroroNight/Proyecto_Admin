<?php
session_start();
require'../config/db.php';

$corre = $_POST['user'];
$pass = $_POST['pass'];


$sql = "Select * from usuarios where nombre = '$corre'";

$resultado=mysqli_query($db,$sql);

if($resultado != false){
    $findit = mysqli_num_rows($resultado);

    if($findit==1){

        $fila=mysqli_fetch_assoc($resultado);
        $pass_en_bd=$fila['contrasena'];

        if(password_verify($pass,$pass_en_bd)) {

            header("location: Inicio.php");

        }

    }
}




?>
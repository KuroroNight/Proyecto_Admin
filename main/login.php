<?php
session_start();
require'../config/db.php';

$corre = $_POST['correo'];
$pass = $_POST['pass'];


$sql = "Select * from users where user = '$corre'";

$resultado=mysqli_query($db,$sql);

if($resultado != false){
    $findit = mysqli_num_rows($resultado);
    if($findit==1){
        $fila=mysqli_fetch_assoc($resultado);
        $pass_en_bd=$fila['password'];
    }
}


header("location: Inicio.php");

?>
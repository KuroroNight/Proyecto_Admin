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

            $id_user = $fila['id_usuario'];
            $id_em= $fila['id_usuario'];
            $nombre_user = $fila['nombre'];

            $_SESSION['id_user'] = $id_user;
            $_SESSION['nombre_user'] = $nombre_user;

            $sql= "select * 
            from empleados 
            where usuario='$id_em'";
            $resultado=mysqli_query($db,$sql);
            $fila=mysqli_fetch_assoc($resultado);
            $nombre_en_bd=$fila['nombre'];

            $_SESSION['nombre_empleado']=$nombre_en_bd;


            header("location: Inicio.php");

        }else{
            $_SESSION['login_error']=1;
            header('location: index.php');
        }

    }else{
        $_SESSION['login_error']=1;
        header('location: index.php');
    }
}


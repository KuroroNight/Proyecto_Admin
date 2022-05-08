<?php
require_once '../../config/global.php';
require '../../config/db.php';

$Nombre = $_POST['nombre'];
$Cargo = $_POST['cargo'];
$Email = $_POST['email'];
$Telefono = $_POST['phone'];
$Usuario = $_POST['user'];
$Departamento = $_POST['dept'];



if (empty($id)){
    $query = "insert into empleados(nombre,cargo,email,telefono,usuario,departamento)
values ('$Nombre','$Cargo','$Email',$Telefono,$Usuario,'$Departamento')";
}

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id = $_POST['id'];

$Nombre = $_POST['nombre'];
$Cargo = $_POST['cargo'];
$Email = $_POST['email'];
$Telefono = $_POST['phone'];
$Usuario = $_POST['user'];
$Departamento = $_POST['dept'];



if (empty($id)){
    $query = "insert into empleados(nombre,cargo,email,telefono,usuario,departamento)
values ('$Nombre','$Cargo','$Email',$Telefono, $Usuario, '$Departamento')";
}else{
    $query = "update empleados set nombre = '$Nombre', cargo = '$Cargo', email = '$Email' , telefono = $Telefono, usuario = $Usuario,departamento = '$Departamento'
    where id_empleado = $id";
}
mysqli_report(MYSQLI_REPORT_ERROR);


$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
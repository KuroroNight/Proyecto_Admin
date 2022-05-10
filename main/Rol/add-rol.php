<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id = $_POST['id'];

$Nombre = $_POST['nombre'];
$num = $_POST['num_rol'];
$stat = $_POST['stat'];





if (empty($id)){
    $query = "insert into roles(nombre,numero_rol,status)values ('$Nombre',$num,'$stat')";
}else{
    $query = "update roles set nombre = '$Nombre',  status = '$stat' where id_rol = $id";
}

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
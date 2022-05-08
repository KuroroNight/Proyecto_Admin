<?php
require_once '../../config/global.php';
require '../../config/db.php';


$Nombre = $_POST['nombre'];
$num = $_POST['num_rol'];
$stat = $_POST['stat'];





if (empty($id)){
    $query = "insert into roles(nombre,numero_rol,status)values ('$Nombre',$num,'$stat')";
}

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id = $_POST['id'];

$Nombre = $_POST['nombre'];
$ubicacion = $_POST['Ubi'];
$status = $_POST['text2'];

if (empty($id)){
    $query = "insert into area(nombre,ubicacion,status)values ('$Nombre','$ubicacion','$status')";
}else{
    $query = "update area set nombre = '$Nombre', ubicacion = '$ubicacion' ,status = '$status',ultima_modificacion = NOW() where id_area = $id";
}

mysqli_report(MYSQLI_REPORT_ERROR);

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
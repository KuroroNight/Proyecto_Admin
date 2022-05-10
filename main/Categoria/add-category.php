<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id = $_POST['id'];

$Nombre = $_POST['nombre'];
$ubicacion = $_POST['text2'];


if (empty($id)){
    $query = "insert into categoria(nombre,status)values ('$Nombre','$ubicacion')";
}else{
    $query = "update categoria set nombre = '$Nombre', status = '$ubicacion' where id_categoria = $id";
}
mysqli_report(MYSQLI_REPORT_ERROR);

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
<?php
require_once '../../config/global.php';
require '../../config/db.php';


$Nombre = $_POST['nombre'];
$ubicacion = $_POST['text2'];





if (empty($id)){
    $query = "insert into categoria(nombre,status)values ('$Nombre','$ubicacion')";
}

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
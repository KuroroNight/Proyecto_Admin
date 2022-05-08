<?php
require_once '../../config/global.php';
require '../../config/db.php';


$Nombre = $_POST['nombre'];
$ubicacion = $_POST['Ubi'];
$status = $_POST['text2'];




if (empty($id)){
    $query = "insert into area(nombre,ubicacion,status)values ('$Nombre','$ubicacion','$status')";
}

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
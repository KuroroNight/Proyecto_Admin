<?php
require_once '../../config/global.php';
require '../../config/db.php';


$Nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$rol = $_POST['rol_id'];
$stat = $_POST['stat'];

if (empty($id)) {
    $query = "insert into usuarios(nombre,contrasena,rol, ultima_modificcaion ,status)
values ('$Nombre','$pass',$rol ,NOW(),'$stat')";
}

$resultado = mysqli_query($db, $query);

if ($resultado) {
    header('location: index.php');
}


?>
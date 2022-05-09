<?php
require_once '../../config/global.php';
require '../../config/db.php';
//conexcion db

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$funcion = $_POST['fun'];
$encargado = $_POST['enc'];
$categoria = $_POST['cat'];
$area = $_POST['area'];
$conexiones = $_POST['Conex'];
$software = $_POST['soft'];
$status = $_POST['stat'];

if (empty($id)){
    $query = "insert into hardware (marca,modelo,funcion,encargado,categoria,area,numero_conexiones,software,status)
values ('$marca','$modelo','$funcion','$encargado','$categoria','$area','$conexiones','$software','$status')";
}

$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}

0

?>
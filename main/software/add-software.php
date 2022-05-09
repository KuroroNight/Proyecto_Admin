<?php
require_once '../../config/global.php';
require '../../config/db.php';
//conexcion db

$licencia = $_POST['lin'];
$nombre = $_POST['nombre'];
$maquinas = $_POST['num'];
$usuarios = $_POST['num'];
$area = $_POST['area'];
$ip = $_POST['ip'];
$status = $_POST['stat'];



if (empty($id)){
    $query = "insert into software (licencia,tipo_software,num_maquinas,num_usuarios,area,IP_equipo,status)
    values ('$licencia','$nombre',$maquinas,$usuarios,$area,$ip,'$status')";
}


$resultado = mysqli_query($db, $query);

if($resultado){
    header('location: index.php');
}



?>
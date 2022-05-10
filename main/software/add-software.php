<?php
require_once '../../config/global.php';
require '../../config/db.php';
//conexcion db

$id = $_POST['id'];

$licencia = $_POST['lin'];
$nombre = $_POST['nombre'];
$maquinas = $_POST['num'];
$usuarios = $_POST['user'];
$area = $_POST['area'];
$ip = $_POST['ip'];
$status = $_POST['stat'];


if (empty($licencia)) {
    $query = "insert into software (licencia,tipo_software,num_maquinas,num_usuarios,area,IP_equipo,status)
    values ('$licencia','$nombre',$maquinas,$usuarios,$area,$ip,'$status')";
} else {
    $query = "update software set licencia = '$licencia', tipo_software = '$nombre', num_maquinas = $maquinas , num_usuarios = $usuarios , area = $area , IP_equipo = $ip, status = '$status' where licencia = '$id'";
}

mysqli_report(MYSQLI_REPORT_ERROR);

$resultado = mysqli_query($db, $query);

if ($resultado) {
    header('location: index.php');
}


?>
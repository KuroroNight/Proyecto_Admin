<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id = $_POST['id_usuario'];

$Nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$rol = $_POST['rol_id'];
$stat = $_POST['stat'];

$pass = password_hash($pass, PASSWORD_BCRYPT);

if (empty($id)) {
    $query = "insert into usuarios(nombre,contrasena, rol,ultima_modificacion ,status) values ('$Nombre', '$pass' , $rol, NOW(),'$stat') ";
} else{
    $query = "update usuarios set nombre = '$Nombre', contrasena = '$pass', rol = $rol , ultima_modificacion = NOW(), status = '$stat' where id_usuario = $id";
}
# password_hash(string $password, integer $algo, array $options = ?): string

mysqli_report(MYSQLI_REPORT_ERROR);

$resultado = mysqli_query($db, $query);

if ($resultado) {
    header('location: index.php');
}

?>
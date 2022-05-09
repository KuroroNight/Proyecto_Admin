<?php
require '../../config/db.php';

$id_borrar = $_GET['id'];
$delete = "delete from roles where id_rol = '$id_borrar' ";
$resultado = mysqli_query($db, $delete);
if ($resultado) {
    header('location: index.php');
}

?>
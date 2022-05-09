<?php
require '../../config/db.php';

$id_borrar = $_GET['id'];
$delete = "delete from usuarios where id_usuario = '$id_borrar' ";
$resultado = mysqli_query($db, $delete);
if ($resultado) {
     header('location: index.php');
}

?>
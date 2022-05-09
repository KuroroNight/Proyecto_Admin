<?php
require '../../config/db.php';

$id_borrar = $_GET['id'];
$delete = "delete from area where id_area = '$id_borrar' ";
$resultado = mysqli_query($db, $delete);
if ($resultado) {
    header('location: index.php');
}

?>
<?php
require_once '../../config/global.php';
require '../../config/db.php';

$id_borrar = $_GET['id'];

$delete = "delete from software where licencia = '$id_borrar' ";
# '237ABCDGHJLPRST'
$resultado = mysqli_query($db, $delete);

if ($resultado) {
    header('location: index.php');
}

?>
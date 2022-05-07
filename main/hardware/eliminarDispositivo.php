<?php

$delete = "delete from hardware where id = 1 ";
$resultado = mysqli_query($db, $delete);

if($resultado){
    header('index.php');
}

?>
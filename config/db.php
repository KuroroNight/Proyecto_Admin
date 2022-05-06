<?php
$db = mysqli_connect('localhost','root','','proyecto_ti');

if ($db === false) { //¿error?
    exit('Error en la conexión con la bd');
}

mysqli_set_charset($db, 'utf8');
?>
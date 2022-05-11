<?php
$db = mysqli_connect('administrandoando.me','root','proyectoti','proyecto_ti');

if ($db === false) { //¿error?
    exit('Error en la conexión con la bd');
}


mysqli_set_charset($db, 'utf8');
?>
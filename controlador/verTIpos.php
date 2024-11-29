<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios




require_once(__DIR__ . '/../modelo/MTiposAgresiones.php');


require_once(__DIR__ . '/../vista/Vista.php');



$con = new Modelo\MtipoAgresiones();
$Tipos = $con->getTipoAgresiones();

$vista = new Vista\Vista();
$vista->mostarTipoAgresiones($Tipos);


?>
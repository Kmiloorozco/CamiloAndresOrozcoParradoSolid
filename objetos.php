<?php

include 'operacionSuma.php';
include 'operacionResta.php';
include 'ObtenerDatos.php';     

$operacionSuma = new operacionSuma();
$operacionResta = new operacionResta();
$obtenerDatos = new obtenerDatos();

$numero1->obtenerNumero1();
$numero2->obtenerNumero2();

$operacionSuma->suma($numero1,$numero2);
$operacionResta->resta($numero1,$numero2);

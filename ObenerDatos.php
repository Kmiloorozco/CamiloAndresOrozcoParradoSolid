<?php
include 'operacionSuma.php';
include 'operacionResta.php';

   
class obtenerDatos{
    
    public function obtenerNumero1(){
        $numero1 = $_REQUEST['numero1'];
        return $numero1;
    }

    public function obtenerNumero2(){
        $numero2 = $_REQUEST['numero2'];
        return $numero2;
    }

}
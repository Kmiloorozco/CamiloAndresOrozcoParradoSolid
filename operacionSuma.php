<?php

class operacionSuma{

    public function suma(){
        $num1 = $_REQUEST['numero1'];
        $num2 = $_REQUEST['numero2'];
        $resultado = $num1+$num2;
        echo 'La suma es'.$resultado;
    }
}
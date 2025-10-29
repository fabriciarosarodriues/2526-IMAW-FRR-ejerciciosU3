<?php

function calcularHipotenusa (float $catetoA,float $catetoB): float{
    #con sqrt() se hace la raiz cuadrada
    $hipotenusa = sqrt($catetoA**2 + $catetoB**2);
    return round($hipotenusa);
}

?>
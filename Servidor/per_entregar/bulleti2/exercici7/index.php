<?php
/**
 * Realizar una funci�n que pas�ndole como argumento un array de n�meros nos devuelva el mayor de todos.
 * a) Ejemplo Funci�n: max( $numeros)
 * $numeros = array(20,35,50,21,56)
 * $numero_maximo=max($numeros);
 */

$numeros = array(20, 35, 50, 71, 56);

$numero_maximo= nmax($numeros);

print "El numero major es ".$numero_maximo;


function nmax($numeros){

    $max = $numeros[1];

    for( $i = 1; $i < count($numeros); $i++){

        if($max < $numeros[$i]){
            $max = $numeros[$i];
        }
    }

    return $max;

}
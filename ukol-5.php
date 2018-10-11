<?php

function minimum ($cislo1= 0, $cislo2= 0) {
    if (is_numeric($cislo1) && is_numeric($cislo2)){
    if ($cislo1 < $cislo2) {
        return $cislo1;
    } else {
        return $cislo2;
    }    
    }
    else {
        return false;
    }
}

$minimum = minimum (56,'xy');

if ($minimum == false) {
   echo 'Chyba';
} else {
    echo $minimum; 
}

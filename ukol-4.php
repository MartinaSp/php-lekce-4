<?php

function maximum ($cislo1= 0, $cislo2= 0) {
    if (is_numeric($cislo1) && is_numeric($cislo2)){
    if ($cislo1 > $cislo2) {
        echo $cislo1;
        echo '<br>';
    } else {
        echo $cislo2;
        echo '<br>';
    }    
    }
    else {
        echo 'Chyba!';
    }
}

maximum (304,560);
maximum (7.2,7.1);
maximum (23,23);
maximum (253,'x');
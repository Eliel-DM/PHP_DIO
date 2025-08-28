<?php

    $arrayNumeros = [3,0,5,12,5,8,9];
    var_dump($arrayNumeros[0]);

    $quantidadeElementos = count($arrayNumeros);

    for($i=0; $i < $quantidadeElementos; $i++){
        echo $arrayNumeros[$i];
    }

?>
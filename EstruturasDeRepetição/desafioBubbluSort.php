<?php

    $array = [7,21,3,4,10];
    $arrayLenth = count($array);

    echo "Array Desordenado: ";
    print_r($array);

    for($i = 0; $arrayLenth > $i; $i++){
        $sorted = false;
        for($j = 0; ($arrayLenth-1) > $j; $j++){
            
            if($array[$j] > $array[$j+1]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
                $sorted = true;
            }
        }
        if(!$sorted) break;
    }

    echo "Array Ordenado: ";
    print_r($array);

?>
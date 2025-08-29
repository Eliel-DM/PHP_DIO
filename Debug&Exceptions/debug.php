<?php

    function divisao($dividendo, $divisor){
        try{
            if($divisor == 0){
            throw new RangeException("O número não pode ser divido por zero");
            }

            $resultado = $dividendo/$divisor;
            echo "O resultado é: ".$resultado;
        } catch(Exception $e) {
            echo $e->getMessage();
        }finally{
            echo "\nTratando exeções";
        }
    }

    divisao(10,2);

   
?>
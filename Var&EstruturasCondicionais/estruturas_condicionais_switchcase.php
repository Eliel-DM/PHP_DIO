<?php
    $sorteio = rand(0,5);

    echo "Valor roteado " . $sorteio;

    switch($sorteio){
        case 0:
            echo " => Você ganhou 2 pontos!";
            break;
        case 1:
            echo " => Você ganhou 1 pontos!";
            break;
        case 2:
            echo " => Você ganhou um bônus ! Parabéns ganhou 3 pontos!";
            break;    
        default:
            echo " => Jogue novamente";
            break;
    }


?>
<?php

    $nota = 3;

    if($nota >= 7){
        echo "Aluno(a) aprovado !";
    }else if(($nota < 7) && ($nota >=4)){
        echo "Aluno(a) está em recuperação";
    }else{
        echo "Aluno(a) reprovado !";
    }
?>
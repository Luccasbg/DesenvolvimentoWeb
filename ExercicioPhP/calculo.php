<?php

    $nome = $_POST["nome"];
    $av1 = $_POST["nota01"];
    $av2 = $_POST["nota02"];
    $media = ($av1 + $av2)/2;

        if($media >= 7){
            echo ("Você foi aprovado! Parabéns, $nome!");
        }

        elseif($media >= 5 && $media < 7){
            echo ("Você está de recuperação, $nome.");
        }

        elseif($media < 5){
            echo ("Você foi reprovado, $nome!");
        }
?>        
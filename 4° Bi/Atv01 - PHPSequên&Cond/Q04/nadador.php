<?php

function classificarNadador($idade) {
    if ($idade >= 5 && $idade <= 7) {
        return "Infantil A";
    } elseif ($idade >= 8 && $idade <= 10) {
        return "Infantil B";
    } elseif ($idade >= 11 && $idade <= 13) {
        return "Juvenil A";
    } elseif ($idade >= 14 && $idade <= 17) {
        return "Juvenil B";
    } elseif ($idade >= 18) {
        return "Adulto";
    } else {
        return "Idade fora das categorias de nadador.";
    }
}

$idadeDoNadador = 12;

$categoria = classificarNadador($idadeDoNadador);
echo "O nadador, com $idadeDoNadador anos, se enquadra na categoria: $categoria";
?>
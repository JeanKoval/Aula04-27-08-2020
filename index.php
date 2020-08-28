<?php

    $primeiroNumero = $_GET['primeiroNumero'];
    $segundoNumero = $_GET['segundoNumero'];

    $resultado= $primeiroNumero + $segundoNumero;

    echo "O soma dos numeros é $resultado" . '<br>';
    
    if ($resultado % 2 == 0){
        echo 'O resultado é par.';
    }else {
        echo 'O resultado é impar.';
    }
    
<?php
    echo "Par ou Impar " . PHP_EOL;
    $num1 = readline("Digite um numero para saber se é par ou impar");
    echo $num1 % 2 == 0 ? "Par" : "Impar" ; 
?>
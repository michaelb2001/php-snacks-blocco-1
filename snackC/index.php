<?php
/*Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta*/

$mioArray = [];
$elementi = 15;
$min= 0;
$max = 100;
while(count($mioArray) < $elementi){
    $numero = rand($min,$max);

    if(!in_array($numero,$mioArray)){
        $mioArray[] = $numero;
    }
}

var_dump($mioArray);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    
</body>
</html>
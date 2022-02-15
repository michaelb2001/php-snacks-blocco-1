<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/


$arrayStundenti = [
    [
        "name" => "gianni",
        "surname"=> "carlino",
        "voti"=>[
            10,
            3,
            5,
            7,
            8
        ]
    ],
    [
        "name" => "franco",
        "surname"=> "giordi",
        "voti"=>[
            3,
            3,
            3,
            4,
            3
        ]
    ],
    [
        "name" => "sandra",
        "surname"=> "sandri",
        "voti"=>[
            10,
            10,
            9,
            10,
            10
        ]
    ],
];

for($i = 0; $i < count($arrayStundenti); $i++){
    $numero = null;
    $numeroVoti = null;
    
    for($index = 0; $index < count($arrayStundenti[$i]["voti"]); $index++){
        $numero += $arrayStundenti[$i]["voti"][$index];
        $numeroVoti = count($arrayStundenti[$i]["voti"]);
    }

    $media = $numero / $numeroVoti;

    $nome = $arrayStudenti[$i]["name"];
    echo "<br> la media di $nome è $media<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    
</body>
</html>
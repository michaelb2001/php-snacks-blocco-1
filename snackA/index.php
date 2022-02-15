<?php
/*Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

$mioArray = [
        [
            'team_1'=>'olimpia milano',
            'team_2'=>'olimpia milano',
            'points_1'=> 55,
            'points_2'=> 60
        ],
        [
            'team_1'=>'mikonos',
            'team_2'=>'pavia',
            'points_1'=> 40,
            'points_2'=> 80
        ],
        [
            'team_1'=>'olimpia milano',
            'team_2'=>'pavia',
            'points_1'=> 104,
            'points_2'=> 90
        ]
    ];

    for($i = 0; $i < sizeof($mioArray); $i++){
        $team1 = $mioArray[$i]["team_1"];
        $team2 = $mioArray[$i]["team_2"];
        $punti_1 = $mioArray[$i]["points_1"];
        $punti_2 = $mioArray[$i]["points_2"];
        echo "<br>$team1 - $team2 <br>
            Risulato : $punti_1 - $punti_2 <br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    
</body>
</html>
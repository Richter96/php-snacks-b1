<!-- 
    
Snack 1:
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 

-->


<?php

$matches = [
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ],
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ],
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ]
       
];
echo "<pre>";
var_dump($matches);
echo "<pre>";


foreach ($matches as $key => $value) {
    echo $key;
    echo $value;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php foreach ($matches as $match) : ?>
<?php endforeach ?>

</body>
</html>
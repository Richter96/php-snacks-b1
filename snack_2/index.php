<!-- 
    

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

-->


<?php

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

var_dump($name. $mail. $age);

if (strlen($name) < 3 ) {
    echo 'accesso negato';
}

if (is_numeric($age)) {
    echo 'accesso Riuscito';
} else {
    echo 'accesso negato';
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

<form action="" method="$_GET">
    <label for="name">nome</label>
    <input type="text" name="name">
    <label for="mail">Email</label>
    <input type="text" name="mail">
    <label for="age">Etò</label>
    <input type="text" name="age">
<button type="submit" class="btn btn-primary">Submit</button>

</form>

</body>
</html>
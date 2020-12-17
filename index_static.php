<?php
require("static_classes/Car.php");
require("static_classes/Honda.php");
require("static_classes/BMW.php");

//Honda is car1
$car1 = new Honda("Civic", 2, "Green", "25,000");

//access the static states() method
$car1->states();




//$car1->statement();
//$car1->price();
//$car1->store();

echo Car::$city;
echo "<hr>";




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
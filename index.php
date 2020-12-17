<?php
require("classes/Car.php");
require("classes/Honda.php");
require("classes/BMW.php");

//Honda is car1
$car1 = new Honda("Civic", 2, "Green", "25,000");

$car1->statement();
$car1->price();

echo "<hr>";

//BMW is car2
$car2 = new BMW("BMW", 4, "Space Grey", "80,000");

$car2->statement();
$car2->price();
$car2->sportsPackage();


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
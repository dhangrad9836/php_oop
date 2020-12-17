<?php
require("dependency_injection_classes/Inventory.php");
require("dependency_injection_classes/Car.php");
require("dependency_injection_classes/Honda.php");
require("dependency_injection_classes/BMW.php");

//Honda is car1
$car1 = new Honda("Civic", 2, "Green", "25,000", new Inventory);

//access inventory via price method via dependency injection
$car1->price();


$car2 = new BMW("ML350", 4 , "blue", 80000, new Inventory);
$car2->price();




//$car1->statement();
//$car1->price();
//$car1->store();

//echo Car::$city;
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
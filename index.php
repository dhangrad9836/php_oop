<?php


class Car{

    //properties
    public $door = 4;

    public function __construct($name, $door = 4, $color="black"){
        //echo "This just go triggered";
        $this->door = 2;
        $this->name = $name;
        $this->color = $color;

    }//end of constructor

    public function printName(){
        echo $this->name;


    }//end printName 


    public function statement(){
        echo "<h1>This car is a {$this->name} and it  has {$this->door} doors. The color of it is 
        {$this->color}</h1>";


    }//end statement


}

$honda = new Car("Civic");
$greenHonda = new Car("Civic", 2, "Green");
$bmw = new Car("M6", 4, "Space Grey");

$bmw->statement();
$honda->statement();
$greenHonda->statement();

//$honda->printName();

//echo"<pre>".var_dump($honda). "</pre>"

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
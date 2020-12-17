<?php
//require("Car.php");

class Honda extends Car{
   
  
        public $company = "Honda";

        //constructor
        public function __construct($name, $doors, $color, $price){
            $this->name = $name;
            $this->doors = $doors;
            $this->color = $color;
            $this->price = $price;
        }

    public function price(){
        echo "<h1>The price of {$this->company} {$this->name} is {$this->price} Yen</h1>";
    }//end of price
   
}



?>
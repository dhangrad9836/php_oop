<?php
//require("Car.php");

class BMW extends Car{
   

        public $company = "BMW";

        //constructor
        public function __construct($name, $doors, $color, $price, Inventory $inventory){
            $this->name = $name;
            $this->doors = $doors;
            $this->color = $color;
            $this->price = $price;
            $this->inventory = $inventory;
        }

    public function price(){
        echo "<h1>The price of {$this->company} {$this->name} is {$this->price} Euro</h1>";

        echo $this->inventory->carTotal($this->company);
    }//end of price

    public function sportsPackage(){

        echo "The car is fully loaded";

    }//end of sportsPackage
   
}//end of BMW class



?>
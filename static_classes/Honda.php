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
        //$this->store();
    }//end of price
    
    
    //since this is a protected function/method you can only use this inside this Class
    //so you would have to use this method inside another function that is
    //being called ie: inside the price() function above
    // protected function store(){

    //     echo "Sold at Northern Blvd Dealership";

    // }//end of store


}//end of Honda



?>
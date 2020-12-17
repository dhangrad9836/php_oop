<?php
//require("Car.php");

class Honda extends Car{
   
  
        //we need this property using via dependency injection to access the 
        //inventory class..in it will search for "Honda" in the array 
        //to get the inventory
        public $company = "Honda";

        //constructor
        //using DEPENDENCY INJECTION - meaning we are injecting a class since we cannot
        //extend another class, we have to use dependency injection to access the 
        //Inventory class
        public function __construct($name, $doors, $color, $price, Inventory $inventory){
            $this->name = $name;
            $this->doors = $doors;
            $this->color = $color;
            $this->price = $price;
            $this->inventory = $inventory;
        }

    public function price(){
        echo "<h1>The price of {$this->company} {$this->name} is {$this->price} Yen</h1>";
        
    
    
    //using the Inventory via dependency injection
    //so we access the Inventory class here through the variable inventory 
    //which then goes to the Inventory class and accesses the carTotal() method
    //then to access the company array
    //so in four steps 
    //1. $this
    //2 $this->inventory
    //3 $this->inventory->carTotal();
    //4 $this->inventory->carTotal($this->company)
    //also in the carTotal() method has 2 arguments
    //the first is the company so it will be either Honda or BMW.
    //the public property/variable at the top will be where this is accessed then
    //in the Inventory class will evaluate if it's Honda or BMW
    //the second argument is the number of cars sold. By default we listed 1 in 
    //constructor if nothing is put...here we put 3 so three cars will be 
    //subtracted from the inventory and display the total cars left
    echo $this->inventory->carTotal($this->company, 4);

    //this statement is calling the inventory from dependency injection
    //for the Inventory class which will be calling the method that 
    //we are using the InventoryInterface that has the carsSold method
    //which we will call to use like below
    echo $this->inventory->carsSold(4);
    
    }//end of price

}//end of Honda



?>
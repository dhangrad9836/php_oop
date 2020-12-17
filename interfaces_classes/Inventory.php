<?php

//interfaces are rules that you give to class

//we have to create the carsSold() method below
//we pass in teh $numberOfCars inside the carSold() method which this number comes
//from the Honda() class that has that number inside of it.
interface InventoryInterface{

    public function carsSold($numberOfCars);
}


class Inventory implements InventoryInterface{
    
    public function carTotal($company, $numberOfCars = 1){
        $companies = [
            "BMW" => 240,
            "Honda" => 177
        ];

        //calculate total cars left after purchase
        $totalAfter = $companies[$company] - $numberOfCars;
        return "{$totalAfter} Total cars left after purchase";
    }//end of carTotal

    //this function is for the InventoryInterface
    public function carsSold($numberOfCars){

        echo "<h2>Today we sold {$numberOfCars}</h2>";

    }//end of carSold

}//end of inventory class


?>
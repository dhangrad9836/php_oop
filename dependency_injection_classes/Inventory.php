<?php

class Inventory{
    
    public function carTotal($company, $numberOfCars = 1){
        $companies = [
            "BMW" => 240,
            "Honda" => 177
        ];

        //calculate total cars left after purchase
        $totalAfter = $companies[$company] - $numberOfCars;
        return "{$totalAfter} Total cars left after purchase";
    }//end of carTotal

}//end of inventory class


?>
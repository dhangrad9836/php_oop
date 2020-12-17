<?php
class Car{

    //properties
        public $doors = 4;
        public $color = "Black";

        //you can use this private property/variable only inside this class
        //so use it inside the store() method with {$this->location}
        private $location = "Northern Blvd";

        //static property/variable
        public static $city = "Queens, NY";
        //note that you access a static variable with ::
        //so in the index page access by Car::$city

        public static $states = [
            "NY",
            "FL",
            "AL",
            "TX",
            "Ny"
        ];




    public function statement(){
    
        echo "<h1>{$this->company} {$this->name} has {$this->doors} doors and the color is
        {$this->color}</h1>";
        $this->store();

    }//end of statement


    //this is a private function/method that only can be used inside this class
    //you cannot extend it inside another class
    private function store(){

        echo "Sold at {$this->location} Dealership";

    }//end of store


    //this is a static function/method
    //you have to use the self::$states to access the loop for static methods
    public static function states(){
        foreach (self::$states as $state){
            echo "<h1>{$state}</h1>";
        }
    }

}//end of car



?>
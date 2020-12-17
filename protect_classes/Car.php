<?php
class Car{

    //properties
        public $doors = 4;
        public $color = "Black";

        //you can use this private property/variable only inside this class
        //so use it inside the store() method with {$this->location}
        private $location = "Northern Blvd";




    public function statement(){
    
        echo "<h1>{$this->company} {$this->name} has {$this->doors} doors and the color is
        {$this->color}</h1>";
        $this->store();

    }//end of statement

    private function store(){

        echo "Sold at {$this->location} Dealership";

    }//end of store

}//end of car



?>
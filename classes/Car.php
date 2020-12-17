<?php
class Car{

    //properties
        public $doors = 4;
        public $color = "Black";




    public function statement(){
    
        echo "<h1>{$this->company} {$this->name} has {$this->doors} doors and the color is
        {$this->color}</h1>";

    }//end of statement
}



?>
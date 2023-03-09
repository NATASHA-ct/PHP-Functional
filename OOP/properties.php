<?php

// creating a class
class Car{

// properties of a car
//can be used anywhere
   public $wheels = 5;

//can only be used inside the class by its methods , therefore objects of this class cant use them or extended classes
   protected $hood = 1;

//  only inside this class not even on extended classes  
   private  $engine = 1;

//it is attached to the class so it cant be referrenced by an object
  static $doors = 4;



//    constructur
function __construct(){

}

    // creating a function
     function MoveWheels(){
        echo "Wheels move";
        // changing val for wheels
      echo  $this->hood = 14;
        
     }


}

// using built in function to check if it exist.
if (class_exists("Car")){
    echo "yeaaaaa  ahhhhhhh";

}

echo "<br>";
// using built in function to check if it exist.
if (method_exists("Car","MoveWheels")){
    echo "I can move";

}
echo "<br>";
//create car object

$bmw = new Car();

// call the function on object

$bmw->MoveWheels();
echo "<br>";
// echo the value of wheels
echo $bmw->wheels;

// using a static variable
echo Car::$doors;

?>
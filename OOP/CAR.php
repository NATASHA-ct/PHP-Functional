<?php

// creating a class
class Car{
    // properties of a car
   var $wheels = 5;
   var $hood = 1;
  var   $engine = 1;
   var $doors = 4;

//    constructur
function __construct(){

}

    // creating a function
     function MoveWheels(){
        echo "Wheels move";
        // changing val for wheels
        
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
// create car object

// $bmw = new Car();

// // call the function on object

// $bmw->MoveWheels();
// echo "<br>";
// // echo the value of wheels
// echo $bmw->wheels;

?>
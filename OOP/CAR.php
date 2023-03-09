<?php

// creating a class
class Car{
    // properties of a car

   
    // creating a function
     function MoveWheels(){
        echo "Wheels move";
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

?>
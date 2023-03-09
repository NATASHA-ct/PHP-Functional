<?php
include "car.php";
// creating a class
class Plane extends Car{

    // override wheels values
    var $wheels = 20;
}


$jet = new Plane();

// call properties from Car
$jet->MoveWheels();

echo $jet->wheels;

?>
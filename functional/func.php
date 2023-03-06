<?php
// associative array haave specific key names not just index numbers


// functions
function say_Greet(){
    echo "Hey tascha!   " . "<br>" . "Hope you are great!   ";
}

say_Greet();

// calling a function inside another function



function say_all(){
  say_Greet() ;
  
  echo "<br>" . "this is it  >";
}

say_all();


// Global variables

$var = "Im a global variable!"; 

function convert(){
    // using a global variable in a function
  global $var;
  echo $var  ."<br>" ;

// local variable
  $home = "Im a local variable";
    echo $home;
}

convert();

// CONSTANTS
// constants are like variables but they cannot be changed

define("NAME", "Tascha");
echo "<br>" . NAME;


?>
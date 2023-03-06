<?php
// associative array haave specific key names not just index numbers


// functions
function say_Greet(){
    echo "Hey tascha!   " ;

    echo "Hope you are great!   ";
}

say_Greet();

// calling a function inside another function



function say_all(){
  say_Greet();

  echo "this is it";
}

say_all();




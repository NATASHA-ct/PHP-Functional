<?php
 //use mysqli api to connect to the  DB
        $connect = mysqli_connect('localhost', 'root','','loginapp'); 
       
        //check if the connection was successful
        if($connect){
            echo "We are connected";
        }
        else{
            //die is a function that stops any other code from running and it returns error in the paranthesis
            die("Database connection failed");
        }
?>
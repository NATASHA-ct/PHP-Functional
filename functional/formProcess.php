<?php
      //get the data from the form
     // we use the superglobal variable called $_POST which is a associative array

     //check if our superglobal var which is an array is empty or not

     if(isset($_POST['submit'])){
        $student = $_POST['student'];
        
        //FAKE DATABASE
        $names = ['maria', 'james', 'tarie', 'tino', 'bule'] ;

         echo "Thank you for your  submition" . "<br>";

        echo "<br>";

        if (in_array($student, $names))
            {
            echo "Match found";
              // check if the name is valid
                if(strlen($student) < 3){
                    echo "Please enter a valid name" . "<br>" . "name should be more that 3 char";
                }else{
                    echo "<br>";

                    echo "WELCOME  " .$student;
                }
            }
            else
            {
            echo "Match not found, contact admin to signup!";
        }


      
      
     
     }

?>

<!DOCTYPE html>
<html lang="en">

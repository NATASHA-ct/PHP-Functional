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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM SUBMISSION</h1>

    <form action="formPost.php" method="post">
        <input type="text" name="student">

        <!-- make sure your data has name because without it you cant send data to the superglobal-->
        <input type="submit" name="submit">   
    </form>

    
    
</body>
</html>
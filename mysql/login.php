<?php
      //get the data from the form
     // we use the superglobal variable called $_POST which is a associative array

     //check if our superglobal var which is an array is empty or not

     if(isset($_POST['submit'])){
        $username = $_POST['username'];
        
         $password = $_POST['password'];
             
        //check if   data ws successfully collected

        if ($username && $password){
            echo "WELCOME  " .$username;
        }
        else{
            echo "Please enter a valid name" . "<br>" . "name should be more that 3 char";
        }
         

        //use mysqli api to connect to the  DB
        $connect = mysqli_connect('locahost', 'root','','loginapp'); 
       
        //check if the connection was successful
        if($connect){
            echo "We are connected";
        }
        else{
            //die is a function that stops any other code from running and it returns error in the paranthesis
            die("Database connection failed");
        }

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class='col-xs-6'>
    <form action='login.php' method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>

</div>


</body>
</html>
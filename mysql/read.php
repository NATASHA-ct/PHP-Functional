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


        // CREATING DATA using queries

       $query = "SELECT * FROM users";
       
        //    send query to DB
      $result = mysqli_query($connect, $query);

    // check if query was sent
    if(!$result){
        die('query failed' . mysqli_error());
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
     <?php
    // we are checking if the fetch has been done well, if its true then it will assign the fetched data to the $row variable

     while($row = mysqli_fetch_assoc($result)){
     ?>
            <pre>
                <?php
                    print_r($row);
                ?>
            </pre>
            
     <?php
          };
        ?>
</body>
</html>
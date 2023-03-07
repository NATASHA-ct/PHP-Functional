<?php
include "db.php"; 

function allData(){

$query = "SELECT * FROM users";
       global $connect 
        //    send query to DB
      $result = mysqli_query($connect, $query);

    // check if query was sent
    if(!$result){
        die('query failed' . mysqli_error());
    }

     while($row = mysqli_fetch_assoc($result)){
                // since row is an object with all the users and their names and pass we can find stuff from it using indeces or keys

                $id = $row['username'];

                echo "<option value='$id'>$id</option>";
             }

}
     

?>
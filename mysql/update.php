 <?php 
 include "db.php"; 
 include "functions.php";

//  the includes helps to reduce repetition
 // fetching DATA using queries

  
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
   <div class='col-xs-6'>
    <form action='update.php' method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        <div class="form-group">
            <select name="id" id="">

            <?php
            allData();

             ?>   
            </select>
        </div>
    </form>
</div>
 
</body>
</html>
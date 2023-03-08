<?php
    //  set $_COOKIE

    // It takes 3 values, name . value . expiry date

    $name = "name";
    $value =100;
    $week = (60*60*24*7);
    $expiration = time() + $week;


    setcookie($name,$value,$expiration);


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
    <form action='cookie.php' method="post">
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


<!-- what to do if the cookie is set , if we get its value-->
<?php
if (isset($_COOKIE["name"])){

    // after getting the cookie value assign a name
   $someOne = $_COOKIE["name"];
   echo $someOne;

}
else{
$someOne = "";
}

?>


</body>
</html>
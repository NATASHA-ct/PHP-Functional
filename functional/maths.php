<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>MATHS FUNCTIONS</h1>

<h2>
        <?php
        // POW function
        echo pow(2, 7); // calculates 2 to the power of 7

        echo "<br>";

        // SQRT function

            echo sqrt(100); // calculates the square root of 100
            
            echo "<br>";
        
        //random number function
            echo "here is a random number!  " . rand(1, 1000); // generates a random number between 1 and 1000
        
        //ceil rounds number up
        // floor rounds down
        // round rounds to the nearest number so if the deci is below 5 it rounds dwn and visversa

        echo "<br> ceil> " .ceil(4.5) . "<br> floor> " .floor(4.5) . "<br> round> " . round(4.5);
        
        ?> 

</h2>

</body>
</html>


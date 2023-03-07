<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> STRING FUNCTIONS </h1>
    <h2>

    <?php
        $words = "Hey Tascha!";
        echo $words . "<br>";

        echo "length> " . strlen($words);

        echo "<br>" . "uppercase> " . strtoupper($words);

        echo "<br>" . "lowercase> " . strtolower($words);

    ?>

    </h2>
    
</body>
</html>
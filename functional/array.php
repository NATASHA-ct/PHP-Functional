<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ARRAY FUNCTIONS</h1>

    <h2>
        <?php
            $list = [343, 34, 323, 23, 54, 232, 453, 54];

            // function to find arr max value
            echo "max> " . max($list) . "<br>";

            // function to find arr min value
            echo "min> " . min($list) . "<br>";

            echo "<br>";
            //
            echo "sort> " . sort($list) . "<br>";
            print_r($list);

            echo "<br>";
            echo "reverse sort> " . rsort($list) . "<br>";
            print_r($list);

            echo "<br>";
            echo "in array> " . in_array(34, $list) . "<br>";

            echo "in array> " . in_array(345, $list) . "<br>";
        ?>
    </h2>
</body>
</html>
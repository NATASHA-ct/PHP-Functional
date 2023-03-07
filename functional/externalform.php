<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM SUBMISSION</h1>

    <form action="formProcess.php" method="post">
        <input type="text" name="student">

        <!-- make sure your data has name because without it you cant send data to the superglobal-->
        <input type="submit" name="submit">   
    </form>

    
    
</body>
</html>
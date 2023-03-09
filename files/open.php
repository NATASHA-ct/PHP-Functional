<?php

// to create a file first create name
$file = "e.g.txt";

// use fopen function to open it pass name and what we want to do with it.
$handle = fopen($file, "w");

// close file after to speed up application
fclose($handle);

// linux or mac users need to give apache permission to write using change ownership  (chown) check on stackoverflow
?>
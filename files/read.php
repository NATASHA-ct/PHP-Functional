<?php

// to create a file first create name
$file = "e.g.txt";

// use fopen function to open it pass name and what we want to do with it.
if($handle = fopen($file, "w")){
// write to file
fwrite($handle, "php is fun");
$content = fread($handle,10);

fclose($handle);

}else{
 echo "Could not write files";
}

// close file after to speed up application


// linux or mac users need to give apache permission to write using change ownership  (chown) check on stackoverflow
?>
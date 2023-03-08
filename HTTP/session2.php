<?php
//  to start a session , which making a file in the browser
// session start has to b on every page where i need to use the session 
session_start();

// displaying file from session 1
echo $_SESSION['greeting'];
?>
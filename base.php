<?php
// Fred Yang, EV Technologies, 2018-07-10
//if (session_status() == PHP_SESSION_NONE) {
    session_start();
//}
 
$dbhost = "localhost";      // hostname
$dbname = "evtdb";          // database name
$dbuser = "evt";            // username
$dbpass = "passwd";         // password
 
$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysqli_error());
mysqli_select_db($con, $dbname) or die("MySQL Error: " . mysqli_error());
?>
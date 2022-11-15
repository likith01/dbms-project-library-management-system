<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "librarydb";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }

?>
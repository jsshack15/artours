<?php
$dbhost = "localhost";
$dbpass = "";
$dbname = "1973905_tie";
$dbuser = "root";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_errno()) {
    echo 'No databsae found';
} 
?>
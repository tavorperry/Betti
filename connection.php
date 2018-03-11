<?php
function Connect()
{
 $dbhost = "sql304.byethost10.com";
 $dbuser = "user";
 $dbpass = "password";
 $dbname = "dbName";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
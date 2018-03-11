<?php
function Connect()
{
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "Betti";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
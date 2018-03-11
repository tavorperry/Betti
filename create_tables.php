<?php

$servername = "localhost";
$username = "root";
$password = null;
$dbname = "Betti";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$createUsers = "CREATE TABLE users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(10) NOT NULL,
    lastname varchar(10) NOT NULL,
    email varchar(100) NOT NULL,
    passsword varchar(20) NOT NULL,
    phone varchar(11),
    gender boolean,
    age int(2),
    reg_date TIMESTAMP
);";


  $success = $conn->query($createUsers);

  if (!$success) {
    die("Couldn't enter data: ".$conn->error);
  }
//Thank you msg
  echo "<p>"."Thank You !"."</p>";

  $conn->close();



//$users = "INSERT into users(firstname,lastname,email,passsword,phone,gender,age) VALUES('" . $f_name . "','" . $l_name . "','" . $email . "','" . $password . "','" . $phone."','" . $gender. "','" . $age . "')";

?>
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
    id INT(6) NOT NULL AUTO_INCREMENT,
    firstname varchar(10) NOT NULL,
    lastname varchar(10) NOT NULL,
    email varchar(100) NOT NULL,
    passsword varchar(20),
    phone varchar(11),
    gender boolean,
    age int(2),
    reg_date TIMESTAMP,
    PRIMARY KEY (id, email)
);";

$createSales = "CREATE TABLE sales (
    id INT(6) NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    descreption varchar(255),
    bussuines varchar(100),
    price int(5),
    reg_date TIMESTAMP,
    PRIMARY KEY (id)
);";

$createBets = "CREATE TABLE bets (
    id INT(6) NOT NULL AUTO_INCREMENT,
    sender int(6) NOT NULL,
    recipient int(6) NOT NULL,
    winner int(6),
    send_date date NOT NULL,
    end_date date NOT NULL,
    status boolean DEFAULT false,
    is_paid boolean DEFAULT false,
    descreption varchar(255),
    sale int(6),
    is_sender_approved boolean DEFAULT false,
    reg_date TIMESTAMP,
    Primary key (id),
    CONSTRAINT `fk_sender` FOREIGN KEY (`sender`) REFERENCES `users`(id),
    CONSTRAINT `fk_sales` FOREIGN KEY (`sale`) REFERENCES `sales`(id)
);";


$createVouchers = "CREATE TABLE vouchers (
    id INT(6) NOT NULL AUTO_INCREMENT,
    exp_date date NOT NULL,
    used_date date,
    sale int(6) NOT NULL,
    bet int(6) NOT NULL,
    reg_date TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT `fk_sale` FOREIGN KEY (`sale`) REFERENCES `sales`(id),
    CONSTRAINT `fk_bet` FOREIGN KEY (`bet`) REFERENCES `bets`(id)
);";

  $success = $conn->query($createUsers);
  if (!$success) {
    die("Couldn't enter data: ".$conn->error);
  }
//Thank you msg
  echo "<p>"."Users created sucessfuly!"."</p>";


    $success = $conn->query($createSales);
  if (!$success) {
    die("Couldn't enter data: ".$conn->error);
  }
//Thank you msg
  echo "<p>"."Sales created sucessfuly!"."</p>";

    $success = $conn->query($createBets);
  if (!$success) {
    die("Couldn't enter data: ".$conn->error);
  }
//Thank you msg
  echo "<p>"."Bets created sucessfuly!"."</p>";

      $success = $conn->query($createVouchers);
  if (!$success) {
    die("Couldn't enter data: ".$conn->error);
  }
//Thank you msg
  echo "<p>"."Vouchers created sucessfuly!"."</p>";
  $conn->close();



//$users = "INSERT into users(firstname,lastname,email,passsword,phone,gender,age) VALUES('" . $f_name . "','" . $l_name . "','" . $email . "','" . $password . "','" . $phone."','" . $gender. "','" . $age . "')";

?>
<?php

$connect = new mysqli("localhost","root","");

if (!$connect) 
{ 
  //if connection fails to establish

  die("Connection failed: " . mysqli_connect_error());
}



$sql = "CREATE DATABASE airline_system";

if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating database: " . mysqli_error($connect);
}


$sql = "CREATE TABLE airline_system.admin_info (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    admin_id VARCHAR(50) NOT NULL UNIQUE ,
    password VARCHAR(255) NOT NULL,
    admin_name VARCHAR(50)  NULL ,
    email_id VARCHAR(50)  NULL,
    contact_no INT(12)  NULL

    )";

if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating table: " . mysqli_error($connect);
}  

//$password="admin123";
//$hashed_paswd= password_hash($password, PASSWORD_DEFAULT);

$sql="INSERT INTO airline_system.admin_info (admin_id,password) VALUES ('admin','admin')";

if (!mysqli_query($connect, $sql)) 
{
    echo "Error inserting data: " . mysqli_error($connect);
}



$sql="CREATE TABLE airline_system.passenger_info (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    passenger_id VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    pass_name VARCHAR(50) NOT NULL,
    email_id VARCHAR(50) NOT NULL,
    passport_no INT(12) NOT NULL
    )";

if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating table: " . mysqli_error($connect);
}

$sql="CREATE TABLE airline_system.booked_flights (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    flight_no INT(12) NOT NULL,
    pass_name VARCHAR(50) NOT NULL,
    fare_paid INT(12) NOT NULL,
    reservation_status VARCHAR(50) NOT NULL
    )";


if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating table: " . mysqli_error($connect);
}

 
 
  $sql="CREATE TABLE airline_system.flights (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    type_of_flight VARCHAR(50) NOT NULL,
    flight_no INT(12) NOT NULL UNIQUE,
    source VARCHAR(50) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    intermediate_stops VARCHAR(50) NOT NULL,
    date_of_journey DATE NOT NULL,
    departure_time TIME NOT NULL,
    arrival_time TIME NOT NULL,
    type_of_class VARCHAR(50) NOT NULL,
    meal VARCHAR(50) NOT NULL,
    amount INT(12) NOT NULL,
    discount INT(12) NOT NULL,
    flight_status VARCHAR(50) NOT NULL
    )";

 
if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating table: " . mysqli_error($connect);
}


 
    header('Location: index.html');

    //mysqli_close($connect);
?>
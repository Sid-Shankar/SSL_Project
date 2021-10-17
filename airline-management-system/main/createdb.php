<?php

$connect = new mysqli("localhost","root","");

if (!$connect) 
{ 
  //if connection fails to establish

  die("Connection failed: " . mysqli_connect_error());
}



$sql = "CREATE DATABASE IF NOT EXISTS airline_system";

if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating database: " . mysqli_error($connect);
}


$sql = "CREATE TABLE IF NOT EXISTS airline_system.admin_info (
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

$password="admin";
$hashed_paswd= password_hash($password, PASSWORD_DEFAULT);


$sql="INSERT INTO airline_system.admin_info (admin_id,password) 
    SELECT * FROM (SELECT 'admin', '$hashed_paswd') AS tmp
    WHERE NOT EXISTS (SELECT admin_id FROM airline_system.admin_info WHERE admin_id ='admin') LIMIT 1 ";

if (!mysqli_query($connect, $sql)) 
{
    echo "Error inserting data: " . mysqli_error($connect);
}


$sql="CREATE TABLE IF NOT EXISTS airline_system.passenger_info (
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

//MODIFIED to add passeger_id field

$sql="CREATE TABLE IF NOT EXISTS airline_system.booked_flights (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    flight_no INT(12) NOT NULL,
    passenger_id VARCHAR(50) NOT NULL UNIQUE,
    pass_name VARCHAR(50) NOT NULL,
    fare_paid INT(12) NOT NULL,
    reservation_status VARCHAR(50) NOT NULL
    )";


if (!mysqli_query($connect, $sql)) 
{
  echo "Error creating table: " . mysqli_error($connect);
}

 
 
  $sql="CREATE TABLE IF NOT EXISTS airline_system.flights (
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


$sql="INSERT INTO airline_system.flights (type_of_flight,flight_no,source,destination,intermediate_stops,date_of_journey,departure_time,arrival_time,type_of_class,meal,amount,discount,flight_status)
    SELECT * FROM (SELECT 'Domestic', '911', 'Delhi' , 'Mumbai' , '1-stop-jaipur', '2021-10-20', '20:44:00', '23:44:00' , 'Economy' , 'Veg/Non-veg' , '5700', '20', 'On-time' ) AS tmp
    WHERE NOT EXISTS (SELECT flight_no FROM airline_system.flights WHERE flight_no ='911') LIMIT 1 ";

if (!mysqli_query($connect, $sql)) 
{
    echo "Error inserting data: " . mysqli_error($connect);
}


$sql="INSERT INTO airline_system.flights (type_of_flight,flight_no,source,destination,intermediate_stops,date_of_journey,departure_time,arrival_time,type_of_class,meal,amount,discount,flight_status)
    SELECT * FROM (SELECT 'International', '423', 'Los angeles' , 'Singapore' , 'Non-stop', '2021-11-14', '18:22:00', '22:56:00' , 'Buisness' , 'Veg/Non-veg' , '23800', '10', 'On-time') AS tmp
    WHERE NOT EXISTS (SELECT flight_no FROM airline_system.flights WHERE flight_no ='423') LIMIT 1 ";


if (!mysqli_query($connect, $sql)) 
{
    echo "Error inserting data: " . mysqli_error($connect);
}

//MODIFIED to insert a sample booked flight, need to see how it works

$sql="INSERT INTO airline_system.booked_flights (flight_no,passenger_id,pass_name,fare_paid,reservation_status) SELECT * FROM (SELECT '911', 'sid123', 'siddharth', '5700', 'Waiting') AS tmp WHERE NOT EXISTS (SELECT pass_name from airline_system.booked_flights WHERE pass_name='siddharth') LIMIT 1";

if (!mysqli_query($connect, $sql)) 
{
    echo "Error inserting data: " . mysqli_error($connect);
}

    //mysqli_close($connect);
?>
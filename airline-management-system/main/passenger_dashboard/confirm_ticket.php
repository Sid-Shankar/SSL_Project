<?php
$name=$_POST["name"];
$email=$_POST["email"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_system";

$mysqli = new mysqli($servername, $username, $password, $dbname);
session_start();
$flight_no=$_SESSION['flight_no'] ;
$fair_paid=$_SESSION['fare_paid'] ;
$passenger_id=$_SESSION['passenger_id'];
$_SESSION['name']=$name;
$_SESSION['email']=$email;

$Sql ="INSERT INTO airline_system.booked_flights (flight_no,passenger_id,pass_name,
    fare_paid,reservation_status) VALUES ('$flight_no','$passenger_id','$name','$fair_paid','Waiting')";
    header("location:final_ticket.php");

?>


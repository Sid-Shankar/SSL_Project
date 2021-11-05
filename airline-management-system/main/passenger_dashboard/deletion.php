<?php

    $db = mysqli_connect("localhost","root","","airline_system");
    session_start();
    $flight_no = $_SESSION['flight_no']; 

$del = mysqli_query($db,"DELETE FROM airline_system.booked_flights WHERE flight_no = '$flight_no'"); 

if($del)
{                                               
    mysqli_close($db);
    header("location:status.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>
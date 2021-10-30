<?php
  
       $conn = new mysqli("localhost","root","","airline_system");
          
        $name = $_POST['name'];
        $email =  $_POST['email'];
        $password = $_POST['password'];
        $passport_number = $_POST['passport_number'];
        session_start();
        $passenger_id = $_SESSION['passenger_id'];
        
        $sql = "UPDATE airline_system.passenger_info
        SET password='$password',pass_name='$name',email_id='$email',passport_no='$passport_number'
        WHERE passenger_id='$passenger_id'";
        

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header("Location: profile.php"); 
?> 



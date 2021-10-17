<?php

//session was already started when admin logged in to dashboard
//session_start();
error_reporting(0);


$con = new mysqli("localhost","root","","airline_system");

{


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/view_edit_profile_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>

    <input type="checkbox" id="nav-toggle"> 
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2 >
               <center>
                   <br/>
                <span>Airline Management</span>
                </center>
           </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../admin_dashboard.php" ><span class="las la-home"></span>
                    <span>Dashboard</span></a>
                </li>
                <br/>
                <li>
                    <a href="../add_new_flight/add_new_flight.php" "><span class="las la-home"></span>
                    <span>Add new flight</span></a>
                </li>
                <br>
                <li>
                    <a href="../view_delete_passenger_record/view_delete_passenger_record.php" "><span class="las la-home"></span>
                    <span>View/Delete a Passenger</span></a>
                </li>
                <br>
                <li>
                    <a href="../view_remove_flight/view_remove_flight.php" "><span class="las la-circle"></span>
                    <span>View/Remove a flight</span></a>
                </li>
                <br>
                <li>
                    <a href="../manage_booked_flights/manage_booked_flights.php" "><span class="las la-sign-out-alt"></span>
                    <span>Manage booked flights</span></a>
                </li>
                <br>
                <li>
                    <a href="view_edit_profile/view_profile.php" class="active"><span class="las la-user-circle"></span>
                    <span>View/Edit Profile</span></a>
                </li>
                <br/>
                <li>
                    <a href="../admin_login/admin_logout.php"><span class="las la-sign-out-alt"></span>
                    <span>Sign Out</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
           <h2>
             <label for="nav-toggle">
                 <span class="las la-bars"></span>
             </label>
             Admin Dashboard
            </h2>
           
        </header>
    <main>
        

    </main>
    </div>  

    <?php
$sql=mysqli_query($con,"select * from admin_info");
$row=mysqli_fetch_array($sql);
{
?>

    <div class="main-content">  
      <div class="bar">
        <h2>Admin details</h2>
        <a href="edit_profile/edit_profile.php?" onClick="return confirm('Are you sure you want to update ?')">
        <button class="btn btn-warning">Update</button>
</a>
      </div>
    </div>
<br>
<br>
    <div class="main-content">  
      <div class="bar">
        <h2>Admin ID : &nbsp; <?php echo htmlentities($row['admin_id']);?> </h2>
      </div>
    </div>
    <div class="main-content">  
      <div class="bar">
        <h2>Password : &nbsp; (Password is in hashed format)</h2>
      </div>
    </div>
    <div class="main-content">  
      <div class="bar">
        <h2>Name : &nbsp; <?php echo htmlentities($row['admin_name']);?></h2>
      </div>
    </div>
    <div class="main-content">  
      <div class="bar">
        <h2>Email ID :&nbsp;  <?php echo htmlentities($row['email_id']);?></h2>
      </div>
    </div>
    <div class="main-content">  
      <div class="bar">
        <h2>Contact no :&nbsp;  <?php echo htmlentities($row['contact_no']);?></h2>
      </div>
    </div>

    <?php 
} ?>   

    </body>
    </html>
    <?php } ?>
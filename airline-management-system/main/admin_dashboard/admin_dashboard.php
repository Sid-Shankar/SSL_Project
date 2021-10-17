<?php
session_start();
if (isset($_SESSION["admin_id"])) {
    $admin_id = $_SESSION["admin_id"];
    session_write_close();
} else {

    // means the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to admin login

    session_unset();
    session_write_close();
    $url = "../admin_login/index.php";
    header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin_dashboard_style.css">
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
                    <a href="" class="active"><span class="las la-home"></span>
                    <span>Dashboard</span></a>
                </li>
                <br/>
                <li>
                    <a href="add_new_flight/add_new_flight.php" "><span class="las la-home"></span>
                    <span>Add new flight</span></a>
                </li>
                <br>
                <li>
                    <a href="view_delete_passenger_record/view_delete_passenger_record.php" "><span class="las la-home"></span>
                    <span>View/Delete a Passenger</span></a>
                </li>
                <br>
                <li>
                    <a href="view_remove_flight/view_remove_flight.php" "><span class="las la-circle"></span>
                    <span>View/Remove a flight</span></a>
                </li>
                <br>
                <li>
                    <a href="update_flight/update_flight.php" "><span class="las la-home"></span>
                    <span>Update flight details</span></a>
                </li>
                <br>
                <li>
                    <a href="manage_booked_flights/manage_booked_flights.php" "><span class="las la-sign-out-alt"></span>
                    <span>Booked flight Tickets</span></a>
                </li>
                <br>
                <li>
                    <a href="view_edit_profile/view_profile.php"><span class="las la-user-circle"></span>
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

    <div class="main-content">  
      <div class="bar">
        <h2>Welcome to your dashboard, Admin !</h2>
      </div>
    </div>
    
    </body>
    </html>
    
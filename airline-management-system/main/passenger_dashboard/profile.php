<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_system";
$mysqli = new mysqli($servername, $username, $password, $dbname);
session_start();
$passenger_id = $_SESSION['passenger_id'];
$sql = "SELECT * FROM airline_system.passenger_info WHERE passenger_id='$passenger_id'";     
$result = $mysqli->query($sql);
$rows=$result->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    img {
    position: absolute;
    top: 300px;
    left: 530px;
    border-radius: 50%;
  }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script>
    function Alert()
    {
        alert("Data Successfully Updated");
    }
</script>    
</head>
<body>

    <input type="checkbox" id="nav-toggle"> 
    <div class="sidebar">
        <div class="sidebar-brand">
           <h2>
               <center>
                   <br/>
                <span>Airline Management</span>
                </center>
           </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php"><span class="las la-home"></span>
                    <span>Dashboard</span></a>
                </li>
                <br/>
                <li>
                    <a href="flights.php"><span class="las la-plane"></span>
                    <span>Airlines Available</span></a>
                </li>
                <br/>
                <li>
                    <a href="booking.php"><span class="las la-clipboard-list"></span>
                    <span>View Bookings</span></a>
                </li>
                <br/>
                <li>
                    <a href="ticket.php"><span class="las la-ticket-alt"></span>
                    <span>Book Ticket</span></a>
                </li>
                <br/>
                <li>
                    <a href="status.php"><span class="las la-signal"></span>
                    <span>Flight Status</span></a>
                </li>
                
                <li>
                    <a href="" class="active"><span class="las la-user-circle"></span>
                    <span>Profile</span></a>
                </li>
                
                <li>
                    <a href="passenger_login_signup/passenger_logout.php"><span class="las la-sign-out-alt"></span>
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
             Profile
            </h2>
        </header> 
        <div style="background-image: url('img/airplane_1.jpg'); background-size: cover; height:400px; padding-top:70px;" class="img-fluid">
        </div>
        <div class="user">
         <center>
            <div class="profile"> <img id="pic" src="img/profile_picture.jpg"  width="200"> </div>
         </center>
        </div>
        <main>
                <div class="card-single">
                       <center><h2>Personal Details</h2></center>
                </div>
                <div class="card-single">
                    <form action="update_profile.php" method="post">
                        <div class="form-group">

                            <label for="exampleInputEmail1"><b>Passenger ID : </b></label>
                            <?php
                            if(isset($rows['passenger_id'])){
                            ?>
                            <b><?php echo $rows['passenger_id'];?></b>
                            <?php
                            }else{
                            ?>
                            <input type="name" class="form-control" name="id" aria-describedby="emailHelp" placeholder="Enter passenger Id">
                            <?php
                            }
                            ?>
                            </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Name</b></label>
                            <?php
                            if(isset($rows['pass_name'])){
                            ?>
                            <input type="name" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name" value="<?php echo $rows['pass_name'];?>">
                            <?php
                            }else{
                            ?>
                            <input type="name" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                            <?php
                            }
                            ?>
                            </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><b>Email address</b></label>
                          <?php
                            if(isset($rows['email_id'])){
                          ?>
                          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $rows['email_id'];?>">
                          <?php
                            }else{
                            ?>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <?php
                            }
                            ?>
                           </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1"><b>Password</b></label>
                          <?php
                            if(isset($rows['password'])){
                          ?>
                          <input type="name" class="form-control" name="password" placeholder="Enter Password" value="<?php echo $rows['password'];?>">
                          <?php
                            }else{
                            ?>
                          <input type="name" class="form-control" name="password" placeholder="Enter Password">
                           <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Passport Number</b></label>
                            <?php
                            if(isset($rows['passport_no'])){
                            ?>
                            <input type="name" class="form-control" name="passport_number" placeholder="Enter Passport Number" value="<?php echo $rows['passport_no'];?>">
                            <?php
                            }else{
                            ?>
                          <input type="name" class="form-control" name="passport_number" placeholder="Enter Passport Number">
                           <?php
                            }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="Alert()">Save Changes</button>
                      </form>
                </div>
        </main>
        
           
    </div>  
    </body>
    </html>
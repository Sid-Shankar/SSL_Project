<?php


error_reporting(0);


$con = new mysqli("localhost","root","","airline_system");

{

if(isset($_GET['confirm']))
      {       
              $booked_flightid=$_GET['id'] ;
              mysqli_query($con,"update booked_flights set reservation_status= 'confirmed' where id = '".$booked_flightid."'");
                  $_SESSION['updmsg']="Message from server: Reservation status successfully changed to CONFIRMED !";

                
      }


      if(isset($_GET['cancel']))
      {       
              $booked_flightid=$_GET['id'] ;
              mysqli_query($con,"update booked_flights set reservation_status= 'cancelled' where id = '".$booked_flightid."'");
                  $_SESSION['updmsg']="Message from server: Reservation status successfully changed to CANCELLED !";

              
      }


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Manage booked flights</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>


    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-weight: 900;
    padding-bottom: 20px;
    text-align:center;
    text-transform: uppercase;
    border-bottom: 1px solid #e7510c;
    padding-bottom: 3px;
    color: #e7510c;
    font-size: 30px;
    margin-bottom: 40px;
    padding-right: 10px;">Manage&nbsp; Booked&nbsp; flight&nbsp; Tickets</h1>
                    </div>
                </div>
                <div class="row" >
                 
                <font color="purple" align="center"><?php echo htmlentities($_SESSION['updmsg']);?><?php echo htmlentities($_SESSION['updmsg']="");?></font>
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Wanna go back to dashboard ?
                            <span>
                            <a href="../admin_dashboard.php" >
                                            <button class="btn btn-primary">Go back to dashboard</button>
                              </a>              
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Flight no.</th>
                                            <th>Passenger ID</th>
                                            <th>Passenger name </th>
                                            <th>Fare paid</th>
                                            <th>Current Reservation status</th>
                                            <th colspan="2">Change Reservation status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"select * from booked_flights");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                        <td><?php echo $cnt;?></td>
                                              <td><?php echo htmlentities($row['flight_no']);?></td>
                                              <td><?php echo htmlentities($row['passenger_id']);?></td>
                                            <td><?php echo htmlentities($row['pass_name']);?></td>
                                            <td><?php echo htmlentities($row['fare_paid']);?></td>
                                            <td><?php echo htmlentities($row['reservation_status']);?></td>
                                            <td>
                                      
<a href="manage_booked_flights.php?id=<?php echo $row['id']?>&confirm=update" onClick="return confirm('Are you sure you want to update?')">
                                            <button class="btn btn-success">Confirm</button>
</a>
                                            </td>
                                            <td>
                                      
<a href="manage_booked_flights.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to update?')">
                                            <button class="btn btn-warning">Cancel</button>
</a>
                                            </td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
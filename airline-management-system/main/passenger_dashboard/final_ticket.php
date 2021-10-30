<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_system";
$mysqli = new mysqli($servername, $username, $password, $dbname);
session_start();
$passenger_id=$_SESSION["passenger_id"];
$people=$_SESSION['people'] ;
$flight=$_SESSION['flight'];
$meal=$_SESSION['meal'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" 
        integrity=
"sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" 
        crossorigin="anonymous">
    </script>
    <style>
        main
        {
            background:rgb(199, 229, 247);
        }
    </style>
</head>
<body> 
<form id ="form-print" enctype="text/plain" class="form-control">
                <center><h2>Airline Management System</h2></center>
                <br/>
                
                <center>
                <hr>
                <h4>Personal Details</h4><br/>
                <hr>
                </center>
                <center>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Passenger Name : <?php echo $name?></b></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Email Id: <?php echo $email?></b></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Passport Number : <?php echo $rows['passport_no'];?></b></label>
                        </div>     
                </center>    
                <br/>
                    
                <center>
                 <?php
                 $sql = "SELECT * FROM airline_system.flights 
                 WHERE flight_no
                 IN (SELECT flight_no FROM airline_system.booked_flights WHERE passenger_id='$passenger_id')";    
                 $result = $mysqli->query($sql);
                 $rows=$result->fetch_assoc()
                 ?>
                 <hr>
                 
                 <h4>Flight Details</h4>
                </center>
                <hr>
                <br/>
                <center>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Airlines : <?php echo $flight;?></b></label>
                        </div>    
                        <div class="form-group">    
                            <label for="exampleInputEmail1"><b>Flight Number: <?php echo $rows['flight_no'];?></b></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Flight Type : <?php echo $rows['type_of_flight'];?></b></label>
                        </div>
                        <div class="form-group">    
                            <label for="exampleInputEmail1"><b>Class : <?php echo $rows['type_of_class'];?></b></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>From : <?php echo $rows['source'];?></b></label>
                        </div>
                        <div class="form-group">   
                            <label for="exampleInputEmail1"><b>To : <?php echo $rows['destination'];?></b></label>
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Arrival : <?php echo $rows['arrival_time'];?></b></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Departure : <?php echo $rows['departure_time'];?></b></label>
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Date : <?php echo $rows['date_of_journey'];?></b></label>
                        </div>
                        <div class="form-group">  
                            <label for="exampleInputEmail1"><b>Meal Plan : <?php echo $meal;?></b></label>
                        </div>  
                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>Intermediate Stops : <?php echo $rows['intermediate_stops'];?></b></label>
                        </div>
                        <div class="form-group"> 
                            <label for="exampleInputEmail1"><b>Number of People : <?php echo $people;?></b></label>
                        </div>
                 </center>
                 <br/>
                 </form>

                 <center><input type="button" class="btn btn-primary" onclick="GeneratePdf();" value="Download Ticket"></center>
                 <br/>
               <script>          
               function GeneratePdf() 
               {
                var element = document.getElementById('form-print');
                html2pdf(element);
               }
               </script>
               <center>
               <button id="mybutton" type="button" class="btn btn-primary" >Back To Dashboard</button>
            </center>
               <script type="text/javascript">
         document. getElementById("mybutton"). onclick = function () 
         {
         location. href = "index.php";
         };
</script>
  
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
        crossorigin="anonymous">
    </script>
            </body>         
</html>      
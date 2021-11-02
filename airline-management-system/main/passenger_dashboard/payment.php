<?php
$flight=$_POST['flight'];
$flight_type=$_POST['flight_type'];
$start=$_POST['start'];
$destination=$_POST['destination'];
$date=$_POST['date'];
$meal=$_POST['meal'];
$people=$_POST['people'];
$class=$_POST['class'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline_system";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM airline_system.flights WHERE type_of_flight='$flight_type' AND source='$start' AND
        destination='$destination' AND date_of_journey='$date' AND type_of_class='$class'";
$result = $conn->query($sql);

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
                <br>
                <li>
                    <a href="" class="active"><span class="las la-ticket-alt"></span>
                    <span>Book Ticket</span></a>
                </li>
                <br/>
                <li>
                    <a href="print_ticket.php" ><span class="las la-clipboard-list"></span>
                    <span>Print Ticket</span></a>
                </li>
                <br/>
                <li>
                    <a href="status.php"><span class="las la-signal"></span>
                    <span>Flight Status</span></a>
                </li>
                <br/>
                <li>
                    <a href="profile.php"><span class="las la-user-circle"></span>
                    <span>Profile</span></a>
                </li>
                <br/>
                <li>
                    <a href="../passenger_login_signup/passenger_logout.php"><span class="las la-sign-out-alt"></span>
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
             Payment 
            </h2>
        </header>
        <main>

<div class="card-single">
<?php
if($result->num_rows > 0)
{
?>
<?php 
$rows=$result->fetch_assoc();
$cost=$rows['amount']*$people;
$discount=$rows['discount']*($cost/100);
$final_cost=$cost-$discount;
session_start();
$_SESSION['flight_no'] = $rows['flight_no'];
$_SESSION['fare_paid'] = $final_cost;
$_SESSION['people']=$people ;
$_SESSION['flight']=$flight ;
$_SESSION['meal']=$meal;
?>
    <div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">Total Amount</h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Ticket Cost</h6>
                    </div>
                    &#8360;<?php echo $cost;?>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Discount</h6>
                    </div>
                    &#8360;<?php echo $discount;?>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Total</h6>
                    </div>
                    &#8360;<?php echo $final_cost;?>
                </li>
            </ul> 
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Payment Details</h4>
            <form class="needs-validation" action="confirm_ticket.php" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name" value="" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="you@gmail.com" required>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <input type="name" class="form-control" name="country" placeholder="Eg:India" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <input type="name" class="form-control" name="state" placeholder="Eg:New Delhi" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">PIN</label>
                        <input type="text" class="form-control" name="PIN" placeholder="" required>
                    </div>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Payment</h4>
                <hr class="mb-4">
                Cards Accepted
                <br/>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Mastercard</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">VISA</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">Discover</label>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="Eg:1234 5673 6254 1604" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="Eg:123" required>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Make Payment</button>
            </form>
        </div>
    </div>
</div>
<?php
}else{
?>  
<center><h2>Flight Not Available</h2></center>
<button id="mybutton" type="button" class="btn btn-primary" >Back To Booking</button>
<script type="text/javascript">
         document. getElementById("mybutton"). onclick = function () 
         {
         location. href = "ticket.php";
         };
</script>
<?php
}
?>   
</div>
</main>
</div>
</body>
</html>   

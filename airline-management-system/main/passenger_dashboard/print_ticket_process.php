<?php
session_start();

//error_reporting(0);

$con = new mysqli("localhost","root","","airline_system");


$booked_id=$_SESSION["booked_flight_id"];



//echo $booked_id;

$sql=mysqli_query($con,"SELECT flights.flight_no , booked_flights.passenger_id, booked_flights.pass_name, booked_flights.fare_paid ,booked_flights.reservation_status
, booked_flights.passenger_count, booked_flights.passport_no, booked_flights.airline, flights.type_of_flight, flights.source, flights.destination, flights.intermediate_stops, flights.date_of_journey, flights.departure_time,
flights.arrival_time, flights.type_of_class, flights.meal, flights.amount, flights.discount, flights.flight_status  FROM flights INNER JOIN booked_flights ON flights.flight_no = booked_flights.flight_no
 WHERE booked_flights.id='".$booked_id."' ;");

while($row=mysqli_fetch_array($sql))
{

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Print ticket</title>
  <link rel="stylesheet" href="css/print_style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="text-align:center;">
<!-- partial:index.partial.html -->
<div class="ticket inverse">
  <header>
    <div class="company-name">
      &nbsp; BOARDING PASS
    </div>
    
  </header>
  <section class="airports">
    <div class="airport">
      <div class="airport-name">
        SOURCE  &nbsp;&nbsp;  &nbsp;&nbsp;
      </div>
      <div class="airport-code">
      &nbsp;<?php echo $row['source'];?> &nbsp;&nbsp; 
      </div>
    </div>

    
    <div class="airport">
      <div class="airport-name">
        DESTINATION
      </div>
      <div class="airport-code">
      <?php echo $row['destination'];?>
      </div>
    </div>
  </section>

  <div class="place-block" >
      <div class="place-label">
        AIRLINE
      </div>
      <div class="place-value">
      <?php echo $row['airline'];?>
      </div>
    </div>

  <section class="place">
    <div class="place-block" >
      <div class="place-label">
        Departure
      </div>
      <div class="place-value">
      <?php echo $row['departure_time'];?>
      </div>
    </div>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="place-block">
      <div class="place-label">
        Arrival
      </div>
      <div class="place-value">
      <?php echo $row['arrival_time'];?>
      </div>
    </div>

    <section class="place">
    <div class="place-block">
      <div class="place-label">
      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Stops
      </div>
      <div class="place-value">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['intermediate_stops'];?>
      </div>
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="place-block">
        <div class="place-label">
          Departure date
        </div>
        <div class="place-value">
        <?php echo $row['date_of_journey'];?>
        </div>
      </div>

      <section class="place">
      <div class="place-block">
        <div class="place-label">
          Type
        </div>
        <div class="place-value">
        <?php echo $row['type_of_flight'];?>
        </div>
      </div>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="place-block">
        <div class="place-label">
          Class
        </div>
        <div class="place-value">
        <?php echo $row['type_of_class'];?>
        </div>
      </div>

      
      <section class="place">
      <div class="place-block">
        <div class="place-label">
          MEAL
        </div>
        <div class="place-value">
        <?php echo $row['meal'];?>
        </div>
      </div>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="place-block">
        <div class="place-label">
         TOTAL AMOUNT
        </div>
        <div class="place-value">
        Rs. <?php echo $row['fare_paid'];?>
        </div>
      </div>

      <section class="place">
      <div class="place-block">
        <div class="place-label">
          flight status
        </div>
        <div class="place-value">
        <?php echo $row['flight_status'];?>
        </div>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="place-block">
    <div class="place-label">
    &nbsp;&nbsp;&nbsp; Passenger ID
    </div>
    <div class="place-value">
    &nbsp;&nbsp;&nbsp;<?php echo $row['passenger_id'];?>
    </div>
  </div>

  <section class="place">
  <div class="place-block">
    <div class="place-label">
      Booking Name
    </div>
    <div class="place-value">
    <?php echo $row['pass_name'];?>
    </div>
  </div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="place-block">
    <div class="place-label">
    &nbsp;&nbsp;&nbsp; Passport No.
    </div>
    <div class="place-value">
    &nbsp;&nbsp;&nbsp;  <?php echo $row['passport_no'];?>
    </div>
  </div>

  
  <section class="place">
  <div class="place-block">
    <div class="place-label">
      DISCOUNT (%)
    </div>
    <div class="place-value">
    <?php echo $row['discount'];?>
    </div>
  </div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="place-block">
    <div class="place-label">
    &nbsp;&nbsp;&nbsp; TRAVELLERS COUNT
    </div>
    <div class="place-value">
    &nbsp;&nbsp;&nbsp;  <?php echo $row['passenger_count'];?>
    </div>
  </div>

    <div class="qr">
      <img src="http://www.classtools.net/QR/pics/qr.png" />
    </div>

</section>

<button id="mybutton" type="button" class="btn btn-warning" onClick="window.print()">Print now</button>

<a href="print_ticket.php">
<button id="mybutton" type="button" class="btn btn-primary" >Back to previous page</button>
</a>
<?php

}

?>

</body>
</html>

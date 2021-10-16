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
                    <a href="" class="active"><span class="las la-home"></span>
                    <span>Dashboard</span></a>
                </li>
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
                <br/>
                <li>
                    <a href="profile.php"><span class="las la-user-circle"></span>
                    <span>Profile</span></a>
                </li>
                <br/>
                <li>
                    <a href=""><span class="las la-sign-out-alt"></span>
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
             Dashboard
            </h2>
           
        </header>
    <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>8</h1>
                    <span>Airlines Available</span>
                </div>
                <div>
                    <span class="las la-plane"></span>
                </div>
            </div>
            
            <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Bookings</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
            </div>
            <div class="card-single">
                    <div>
                        <h1>6000</h1>
                        <span>Money Spent</span>
                    </div>
                    <div>
                        <span class="las la-rupee-sign"></span>
                    </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>15%</h1>
                    <span>Current Discount</span>
                </div>
                <div>
                    <span class="las la-wallet"></span>
                </div>
            </div>
        </div>
    </main>
    </div>    
    <div class="main-content">  
      <div class="bar">
        <span><h3>Top Destinations</h3></span>           
      </div>
    </div>
        <div class="main-content">
            <div class="cards">
             <div class="card-single">
                <div>
                    <img src="img/Leh.jpg" style="width:100%">
                    <div>
                    <center>Jammu & Kashmir</center>
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/Punjab.jpg" style="width:100%">
                    <div>
                    <center>Punjab</center>
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/kerala.jfif" style="width:100%">
                    <div>
                    <center>Kerala</center>    
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/rajasthan.jfif" style="width:100%">
                    <div>
                    <center>Rajasthan</center>    
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/assam.jfif" style="width:100%">
                    <div>
                    <center>Assam</center>    
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/delhi.jfif" style="width:100%">
                    <div>
                    <center>Delhi</center>    
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/karnataka.jfif" style="width:100%">
                    <div>
                    <center>Karnataka</center>    
                    </div>
                </div>
             </div>
             <div class="card-single">
                <div>
                    <img src="img/tn.jfif" style="width:100%">
                    <div>
                    <center>Tamil Nadu</center>    
                    </div>
                </div>
             </div>
            </div>
        </div>
    
    </body>
    </html>
    
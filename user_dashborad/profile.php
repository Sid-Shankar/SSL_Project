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
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Passenger ID</label>
                            <input type="number" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Enter Id">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Passport Number</label>
                            <input type="number" class="form-control" id="passport_number" placeholder="Enter Passport Number">
                          </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </form>
                </div>
        </main>
        
           
    </div>  
    </body>
    </html>
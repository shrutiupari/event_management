<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	// select loggedin users detail
    $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res);

    $username = $_SESSION['fname'];
    $eventid=$_SESSION['eid'];
    //$eventid=1;
    $eventname=$_SESSION['e_banner'];
    $useremail=$_SESSION['email'];
    $useraddress= $_SESSION['address'];
   // $member_id=$_SESSION['user'];  
    $member_id=1;
     $eventid=1;
     $event_result = mysql_query($dbcon, "SELECT * FROM images WHERE eid = '" . $eventid. "' ");
          //$event_result = mysql_query($dbcon, "SELECT * FROM images WHERE eid = 1 ");
     //echo $event_result;
     if ($event_row = mysql_fetch_array($event_result)) {
        $ticketprize = $event_row['e_price'];
        echo $ticketprize;
     }
     else{
          $errormsg = "No event";
     }
 //$e_price=100;
 $no_of_tickets = $_POST['ticket_no'];
 $total_prize=$ticketprize*$no_of_tickets;
$_SESSION['no_of_tickets']=$no_of_tickets;
$_SESSION['total_price']=$total_prize;
//$total_prize='100';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ticket Booking</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>
        <nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="index.php">Event Management</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['$username']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div>
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="ticketbooking">
				<fieldset>
                                    <h3 style="color:black;">Hello <?php echo $username?><br></h3>
                                    <h4 style="color:black;">Welcome!!! Please book your tickets<br></h4>
                                    <h4 style="color:black;">For Event: <?php echo $eventname?><br></h4>
					
					<div>
                                            <label for="name">Enter no of Tickets</label><br><br>
                                            <input type="number" name="ticket_no" placeholder="No of tickets" required class="form-control" /><br>
					</div>
                                    
                       	<div class="form-group">
						<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
					</div>
				</fieldset>
			</form>
                    <span style="color:#0F9F18";><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                            <?php
          if (isset($_POST['submit'])) {
              
              if($no_of_tickets>5){
                  echo "5 tickets can be book at a time";
              }else{         
        $no_of_tickets = $_POST['ticket_no'];
        $no_of_tickets=4;
        //$total_prize=$ticketprize*$no_of_tickets;
        $total_prize=100;
        $book = mysqli_query($dbcon, "INSERT INTO concert.booking (eid,mid,b_price,b_seats) VALUES ('" . $eventid . "', '" . $member_id . "', '" . $total_prize . "','" . $no_of_tickets . "')");
         //$sql = mysqli_query($conn,"UPDATE concert.images SET no_of_seats=e_seatsavail-$b_seats where id='$eid'");             
                  
                  echo ("<script>
    window.alert('Your Ticket Booking has been confirmed!');
    </script>");
                     
              }    
}
?>
		</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>






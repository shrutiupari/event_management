<?php
session_start();
include_once 'dbconnect.php';

if(!(isset($_SESSION['usr_id']))) {
  header("Location: index.php");
} 

    $username = $_SESSION['firstName'];
    $eventid=$_SESSION['eid'];
    echo $eventid;
    $eventname=$_SESSION['e_banner'];
    echo $eventname;
    $useremail=$_SESSION['email'];
    $useraddress= $_SESSION['address'];
    //$terms=$_SESSION['terms'];
    $no_of_tickets=$_SESSION['e_seatsavail'];
    $total_price=$_SESSION['b_price'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ticket Booking</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body style="width:80%;
        margin-left:auto;
        margin-right:auto;">
        <nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Event Management</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
	<div style="border: 1px solid green ;
				-webkit-box-shadow: 0 10px 6px -6px #777;
	   -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
				text-align:center;">
                            <?php
	    echo "Hi\n" .$username."<br>";
        echo "Tickets have been Booked Successfully!!!!!!!!"."<br>";
        echo "No. of tickets booked:".$no_of_tickets."<br>";     
        echo "Your Booking cost is:".$total_price."<br>";
        echo "Your tickets will send to the given address:".$useremail."<br>";
        echo "Email will be send to:".$useremail."<br>";
        //echo "Terms and condition:".$terms; 
?>
		<div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>




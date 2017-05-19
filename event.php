<?php
include 'dbconnect.php';	
$qry="select * from images where eid='1'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$_SESSION['eid']=$row['eid'];
?>
<div class="col-sm-3 w3_tab_img_left">
<div class="demo">
<a class="cm-overlay" href="images/g1.jpg">
 <figure class="imghvr-shutter-in-out-diag-2"><?php echo '<img src="data:image;base64,'.$row[2].' " alt="First" class="img-responsive"/> ';?>
 </figure>
</a>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-8">
<div><h3><b>EventName:</b></h3><?php echo $row['e_banner']; ?> </div><br>
<div><h3><b>Description:</b></h3><?php echo $row['e_description']; ?></div><br>
<div><h3><b>Venue:</b></h3><?php echo $row['e_venue']; ?></div><br>
<div><h3><b>EventStartDate:</b></h3><?php echo $row['e_startdate']; ?></div><br>
<div><h3><b>EventEndDate:</b></h3><?php echo $row['e_enddate']; ?></div><br>
<div> <h3> <b> Contact Us: </b> </h3> <?php echo $row['e_contact'];?> </div><br>
</div>
</div>
</div>
<form action="booking.php" method="POST">
<input type="submit" value ="Book Tickets" name="sub"/>

    
</form>
</html>


<?php
//create variable

     $cid=$_POST["cmdyear"]."-".$_POST["cmdmonth"]."-".$_POST["cmdday"];
	 $cod=$_POST["cmbyear"]."-".$_POST["cmbmonth"]."-".$_POST["cmbday"];
	 $norm=$_POST["txtroom"];
	 $type=$_POST["roomtype"];
	 $name=$_POST["txtname"];
	 $email=$_POST["txtemail"];
	
	 $tele=$_POST["txtnumber"];
	 $addr=$_POST["txtaddress"];
	 $spreq=$_POST["txtspanyreq"];
include 'dbconnection.php';
//Execute the query
 
 
mysqli_query($connection,"INSERT INTO reservations (checkin,checkout,noofrooms,roomtype,fullname,email,telephone,address,specialrequirements)
		        VALUES ('$cid','$cod','$norm','$type','$name','$email','$tele','$addr','$spreq')");
				
	if(mysqli_affected_rows($connection) > 0){
	echo "<p>Room Reserved</p>";
        echo '<a href="home.php">Go to Home Page</a>';

} else {
	echo "Room NOT Reserved<br />";
	echo mysqli_error ($connection);
}
?>
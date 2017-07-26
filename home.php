<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Hotel Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <script language=javascript src="function.js">
	</script>
	<script language=javascript>
		function checkout()
		{
			var i=0;
	for(x=0;x<document.f1.elements.length;x++)
	{
		if(document.f1.elements[x].value=="")
		{
			f1.txtname.focus();
			alert("Pls Enter All Value");
			i=1;
			break;
		}
	}
	if(i==0)
	{
		f1.method="POST";
		f1.action="process.php";
		f1.submit();
	}
		}
	</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Hotel Dahlia</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#reservation">RESERVATION</a></li>
          <li><a href="tariff.php">TARIFFS</a></li>
        <li><a href="#contact">CONTACT</a></li>
         <li><a href="login.php">ADMIN</a></li>
          <
        
        
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg" alt="Hotel" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Hotel Dahlia</h3>
          <p>Front view of our hotel.</p>
        </div>      
      </div>

      <div class="item">
        <img src="4.jpg"alt="picture" width="1200" height="700">
              
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="picture" width="1200" height="700">
     </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container  -->
<div id="aboutus" class="container text-center">
  <h3>About us</h3>
  <p><em>Namaste!</em></p>
  <p>Give in to the majestic mountains and breathtaking beauty of the alluring lake city pokhara at Dahlia Hotel, a boutique hotel which completely personifies the heart and soul of Pokhara city. Dahlia is a safe haven to unwind and luxuriate for discerning travelers like you. Named after the beautiful flower Dahlia which denotes elegance and dignity, we offer you attentive services backed by traditional hospitality values in a peaceful atmosphere with uninterruptible views of mountains and lakes. Dahlia Hotel would like to extend a gracious and inclusive welcome to all of you to your first step in this beautiful lake city Pokhara .
Dahlia is a 5 storey boutique Hotel which showcases the perfect blend of traditional Nepali hospitality interlaced with contemporary modern sophistication. It is designed to give an insight into the beauty embraced by the traditional Malla Architecture, lending the hotel a strong traditional feel. The bold ambient outlook and charismatic interior makes Dahlia one of the Pokhara’s most mesmerizing Hotel experiences. Linger to relish the majestic peaks of the Annapurna Range and its glowing reflection in the Phewa lake from our premise and allow us to pamper you!!

Housekeeping includes in the room tariff
</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      
      <a href="#demo" data-toggle="collapse">
        <img src="5.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>24*7 reception/ front desk</p>
        
      </div>
    </div>
    <div class="col-sm-4">
   
      <a href="#demo2" data-toggle="collapse">
        <img src="6.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Bathroom attached with every unit.</p>
        <p> No minimum stay required</p>
        
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo3" data-toggle="collapse">
        <img src="7.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Housekeeping includes in the room tariff</p>
        
      </div>
    </div>
  </div>
</div>

<!-- Container (SERVICE Section) -->
<div id="services" class="bg-1">
  <div class="container">
    <h3 class="text-center">Services</h3>
    <p class="text-center">Outdoors:<br> BBQ facilities<br>
Garden<br>
Terrace<br>
Sun terrace</p>
  
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="8.jpg" alt="picture" width="400" height="300">
         <p class="text-center">Food and Drinks:<br>
          <p>Restaurant<br>
Bar<br>
Breakfast in the room<br>
Restaurant<br>
Special diet menus (on request)</p>
         
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="9.jpg" alt="picture" width="400" height="300">
            <p class="text-center">Cleaning Services:<br>
              <p>Laundry<br>
Dry cleaning<br>
Ironing service<br>
Shoeshine<br>
Trouser press<br>
Daily maid service
            </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="5.jpg" alt="picture" width="400" height="300">
            <p class="text-center">Receptiom Services:<br>
          <p>24-hour front desk<br>
Express check-in/check-out<br>
Currency exchange<br>
Tour desk<br>
Ticket service<br>
Luggage storage<br>
Concierge service<br>
Private check-in/check-out<br>
Lockers</p>
          
        </div>
      </div>
    </div>
  </div>
    </div>

    
  <!-- Container (Reservation systemSection) -->
<div id="reservation" class="bg-1">
  <div class="container">
    <h3 class="text-center">Reservations</h3>
   

    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="royal.jpg" alt="Royalsuite" width="400" height="300">
          <p><strong>Royal Suite</strong></p>
          <p>The Royale Suite is the largest room of area 118 m2 /1278 sq. feet and offers a touch of luxury for the stylish traveler.The lure of the room is the absolute privacy that comes with your own piece of the sky. Enter the dramatic and lavish Royale Suite and feel momentarily transported to the glory of royal life. This 118 impeccably designed suite features one king size bedroom with private terrace and en-suite bathroom with Jacuzzi, spacious well equipped living room , kitchenette plus a further bathroom making it ideal for families. The working area is separated for privacy and fitted with bench ,32”/42” LED TV and a working table with complimentary high speed internet.Palatial in every way, the Royale Suite has been designed in a sumptuous color scheme and high end furnishings to give you a glamorous homely retreat. Featuring a private deck with an outdoor dining area and feature lighting,this is the ideal room for a getaway in the luxury of privacy.Gaze at the city of lakes and himalayan peaks from the solace of a commodious Royal Suite and get the best of Pokhara.</p>
         
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="jr.jpg" alt="jr suite" width="400" height="300">
          <p><strong>Jr Suite</strong></p>
          <p>Elegant and refined, this generous,bright and totally furnished rooms come with a bedroom with California king-size bed and a separate living room ideal for both business purpose and leisure or a private terrace. The european designed eco-friendly bathroom garnished with the very latest style vanity features an antique bathtub with stylish finishes and a rain shower. Designed with the business traveller in mind, Dahlia’s spacious living room features a small working desk plus sofas, a full stationery set, and newspapers, 32”/42” Ultra HD Led TV and a conducive workplace to conduct small meetings or socialize with colleagues with complimentary high speed internet access.The two junior suites with living rooms have a total area of 30m2 /324 sq.feet.
The two junior suites which opens up to a private terrace brings the delight of nature in your room.It has total area of 60m2 /640 sq feet. Reading a good book or having a lazy take-away lunch with friends in the private outdoor area is what a leisure traveler will find themselves doing this room.These suites are designed to give you a luxurious atmosphere with magnificent views of the Annapurna range and Phewa Lake and refined stay whilst away from home.</p>
           <button class="btn" data-toggle="modal" data-target="#myModal" >Book Now</button> 
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="edlxsuite.jpg" alt="exec deluxe" width="400" height="300">
          <p><strong>Exec.deluxe Suite</strong></p>
          <p>Take in Pokhara city views from our cosy and enticing 20 m2 /210 sq. feet deluxe rooms. It features one queen size Bed/twin beds complementing the art deco inspired furnishings. The european designed eco-friendly bathroom garnished with the very latest style vanity features a standalone rain shower. With residential touches such as Sofas, Side Table, Tea/Coffee Maker, water boiler, each room provides some much needed downtime for the recreational traveler. Treat yourself to our complimentary in-room mini-bar and stay connected to your loved ones with complimentary unlimited high-speed WIFI/wired Internet for multiple devices. After a long day,just cool down and watch your favorite DVD on the 32” LED flat screen TV.</p>
          
        </div>
         
      </div>
    </div>
  </div>
    
          
 
    
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Make Reservation</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="process.php" method="POST" name="f1">
            <div class="form-group">
            
<table border=0 align=center>
<tr>
	<th align=left>CHECKIN DATE   :</th>
	<td>
		<?php
		echo "<select name='cmdyear'>";
		for($i=2010;$i<=2020;$i++)
		{
			if($i==date("Y"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		}
		echo "</select>";
		?>
		
		 


		
		<?php
                  echo "<select name='cmdmonth'>";
		for($i=01;$i<=12;$i++)
			if($i==date("m"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
                  echo "</select>";
		?>
		
		<?php
                  echo "<select name='cmdday'>";
		for($i=01;$i<=31;$i++)
			if($i==date("d"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
                   echo "</select>";
				  
				 
		?>
				  
	</td>
</tr>
<tr>
	<th align=left>CHECKOUT DATE   :</th>
	<td>
        
	<?php
		echo "<select name='cmbyear'>";
		for($i=2010;$i<=2020;$i++)
		{
			if($i==date("Y"))
			{
				echo "<option value=$i selected>".$i."</option>";
			}
			else
			{
				echo "<option value=$i>".$i."</option>";
			}
		}
		echo "</select>";
		?>
	
	<?php
	
	echo "<select name='cmbmonth'>";
		
		for($i=1;$i<=12;$i++)
			if($i==date("m"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		
	echo "</select>";
	
			
	?>
		
		
        <?php
	echo "<select name='cmbday'>";
	
		for($i=1;$i<=31;$i++)
			if($i==date("d"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
	echo "</select>";	
	
	?>
        
	</td>
</tr>
<tr>
	<th align=left>NO OF ROOMS   :</th>
	<td><select name=txtroom>
	<?php
	for($i=1;$i<=20;$i++)
	{
		echo "<option value=$i>$i</option>";
	}
	?>
	</select></td>
	
</tr>
   <tr>
 <th align=left>TYPE   :</th>
  <td colspan=4><input type="radio" name="roomtype" value="deluxe">deluxe<br>
    <input type="radio" name="roomtype" value="jrsuite">jr.suite<br>
     <input type="radio" name="roomtype" value="execsuite">exec.suite  </td>
         
    </tr>
<tr>
	<th align=left>FULL NAME   :</th>
	<td colspan=4><input type=text name=txtname size=50></td>
    
</tr>
    
<tr>
	<th align=left>EMAIL   :</th>
	<td colspan=4><input type="text" name="txtemail" size=50></td>
</tr>

<tr>
	<th align=left>TELEPHONE   :</th>
	<td colspan=4><input type="text" name="txtnumber" size=15 ></td>
</tr>
<tr>
	<th align=left valign=top>ADDRESS   :</th>
	<td colspan=4><textarea name=txtaddress rows=5 cols=40></textarea></td>
</tr>
<tr>
	<th align=left>SPECIAL REQUIREMENT IF ANY   :</th>
	<td colspan=4><textarea name=txtspanyreq rows=5 cols=40></textarea>
</tr>
<tr>
	<td colspan=2 align=center><input type=button name=s1 value="submit" onClick="checkout()"></td>
</tr>

</table>
</form>
        
        </div>
       
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  

  <div class="row">
    <div class="col-md-4">
      <p>Contact Us At:</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Hotel Dahlia, Pokhara, Nepal</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone:+977-9841526378</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: hoteldahlia@gmail.com</p>
    </div>
    
  </div>
  <br>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Copyright &copy HotelDahlia; 2017. All Rights Reserved.</p> 
</footer>

</body>
</html>

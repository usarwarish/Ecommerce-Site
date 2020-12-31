<?php 
session_start();

if(isset($_SESSION['id'])){ 
		header('Location: /FS/home.php');
	}

	?>
<!DOCTYPE html>
<html>
<head>
	


</head>
<body style="font-family: 'Piedra', cursive; font-family: 'Righteous', cursive; background-color: #63d471;
background-image: linear-gradient(315deg, #63d471 0%, #233329 74%); color:floralwhite">

<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
}
else{
	require 'header_logged_in.php';
}
	?>

<div class="row" >
	<div class="container" style="margin-top: 80px; padding: 20px; border: 3px solid #bbb ">
	<div class="row-style-login-page-pannel">
		<div class="col-sm-9 col-xs-12">
			<h2>LIVE SUPPORT</h2>
			<h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
			<p>We are here for our customers in case of any grivances</p>
			</div>
			<div class="col-sm-3 col-xs-12">
			<!-- contact us pic-->
			<img src="images\livesupport.jpg">

			</div>

		</div>
	</div>
</div>





<div class="row">
	<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12" >
			<h3>CONTACT US</h3>
			<form method="post"  action="cont.php">
				<div class="form-group">
					Name:<input type="text" class="form-control" name="name" required="true" pattern=".{1,}" placeholder="Your full Name...">
				</div>

				<div class="form-group">
					Email Id:<input type="email" class="form-control" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Your email...">
				</div>

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="message" required="true" pattern=".{1,}" placeholder="Your detailed query..."></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit" name="king">Submit</button>						
						</button>

			</form>
			
			</div>
			<div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc">
			<h3>Company Information:</h3>
			<p>Near TCS Gitobitan,<br>Salt Lake, Kolkata<br>INDIA<br>Phone:033-255-6422<br>Fax: 033-255-6422<br>Email:ge.info@gmail.com<br>Follow on:Facebook, Twitter, Instagrams<br></p>
			</div>

		</div>
	</div>
</div>





<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>
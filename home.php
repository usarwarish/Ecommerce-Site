<?php
session_start();
$var1=time();
 ?>


<!DOCTYPE html>
<html>
<head><title>Gaming ERA |PC Gaming Peripherals Dealers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&family=Righteous&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="css/styles.css">



</head>

<body style="font-family: 'Piedra', cursive; font-family: 'Righteous', cursive; background-color: #63d471;
background-image: linear-gradient(315deg, #63d471 0%, #233329 74%);
">
	<div class="container" style="padding: 40px 0px">
		<div id="myCarousel" class="carousel slide carousel-multi-item" data-ride="carousel" style ="margin :50px 0px">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

				<!-- Wrapper for slides -->
			<div class="carousel-inner" style ="align-items-center; background-color:#bfff00;color: #210F0B;">

				<div class="item active">
					
						<img class="pull-left d-block " src="images/cr1.jpg" alt="Chania" width="500" height="450" style ="justify-constant-center3;">
						<span class="pull-right" style="align-item-center; padding:50px">
							<h2>The Revolutionary Games </br>are waiting for you...</h2>
						</span>
					
				</div>

				<div class="item">
					<img class="pull-left d-block " src="images/cart2.jpg" alt="Chicago" width="500" height="450" style ="justify-constant-center3;">
					<span class="pull-right" style="align-item-center; padding:50px">
						<h2>The Revolutionary Teams</br> are back in action!!</h2>
					</span>
				</div>

				<div class="item">
					<img  class="pull-left d-block " src="images/cr3.jpg" alt="New York" width="500" height="450">
					<span class="pull-right" style="align-item-center; padding:50px 180px 50px 20px">
						<h2>Eat,</br> Sleep,</br> GRIND,</br> Repeat !!</h2>
					</span>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev" width="500" height="250">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<?php
	if(!isset($_SESSION['id'])){ header( "Location :/IS/index.php" ); }
		
    else { 
		require 'header_logged_in.php'; 
	?>

	<div  class="container" style="margin-top: 60px;">
	<b>
	<?php
	echo "Hi ".$_SESSION['name'];
	?>
	</b>
	</div>

	<!-- 2 PANNEL begins-->
	<div class="container" style="margin-top: 50px; margin-bottom: 100px">
		<div class="row row-style-login-page-pannel">
			<div class=" col-md-4 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"># 1</div>
					<div class="panel-body">
						<!--put mobile phone pics and its specifications in this box in all pannels. -->
						<center><img  class="img-responsive"  src="images\phones\G268.jpg">
						<b> Logitech Headset G268 <br></b>Price:Rs. 2,999/-</center>
						<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>

					</div>
				</div>
			</div>	

			<div class=" col-md-4 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"># 2</div>
					<div class="panel-body">
						<!--put mobile phone pics and its specifications in this box in all pannels. -->
						<center><img  class="img-responsive" src="images\phones\G40.jpg">
						<b> Logitech Webcam G40 <br></b>Price:Rs. 28,459/-</center>
						<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


					</div>
				</div>
			</div>

			<div class=" col-md-4 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"># 3</div>
					<div class="panel-body" >
						<!--put mobile phone pics and its specifications in this box in all pannels. -->
						<center><img  class="img-responsive" src="images\phones\GPRO.jpg">
						<b> Logitech Gpro Mouse <br></b>Price:4,500/-</center>
						<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


					</div>
				</div>
			</div>	

			<div class=" col-md-4 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"># 4</div>
					<div class="panel-body" >
						<!--put mobile phone pics and its specifications in this box in all pannels. -->
						<center><img  class="img-responsive" src="images\phones\monitor.jpg">
						<b> Logitech 160Hz Monitor <br></b>Price:56,000/-</center>
						<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


					</div>
				</div>
			</div>	

			<div class=" col-md-4 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"># 5</div>
					<div class="panel-body" >
						<!--put mobile phone pics and its specifications in this box in all pannels. -->
						<center><img  class="img-responsive" src="images\phones\speed.jpg">
						<b> Logitech Speed Type Mouse Pad <br></b>Price:5,199/-</center>
						<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


					</div>
				</div>
			</div>	

			<div class=" col-md-4 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading"># 6</div>
					<div class="panel-body">
						<!--put mobile phone pics and its specifications in this box in all pannels. -->
						<center><img  class="img-responsive" src="images\phones\graphic.jpg">
						<b> MSI 2080Ti Grapic Card <br></b>Price:92,500/-</center>
						<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


					</div>
				</div>
			</div>	
		</div>
	</div>
	<!--2 PANNEL ENDS-->

	<?php } ?>

	<?php require 'login_modal.php'; ?>
	<?php require 'add_to_cart.php'; ?>


</body>
</html>


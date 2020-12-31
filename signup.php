
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
background-image: linear-gradient(315deg, #63d471 0%, #233329 74%);">

<?php 
require 'header_logged_out.php';
?>

<div class="container" > 
<div class=" row" style="margin: 80px 0px; color: #fffaf0" >
	<div class="col-sm-7 col-xs-12">
		<img class="img-responsive img-rounded" src="images\signuppic.jpg" width="auto" height=auto>
	</div>


	<div class="  col-sm-5 col-xs-12 " style="margin-bottom: 100px;">
		<h2><strong> SIGN UP</strong> </h2>
		<form method="POST" action="sign.php">
			<div><?php //echo $_GET['total_error']; ?></div>
						<div class="form-group" >
							<input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern=".{1,}" >
						</div>

						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
							<div><?php //echo $_POST['email_error']; ?></div>
							<div><?php// echo $_GET['exist_error']; ?></div>
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{1,}" >
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10}" >
							<div><?php //echo $_GET['contact_error']; ?></div>
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required="true" pattern=".{1,}" >
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required="true" pattern=".{1,}" >
						</div>

						<div>
							<button class="btn btn-danger" type="submit" value="Submit"  name="button">Submit</button>						
						</div>

		</form>
		<br><p>Aleady Registered? <a data-toggle="modal" data-target="#pz" style="color:purple;">Login</a> </p>
	</div>
</div> 
</div>

<?php require 'login_modal.php'; ?>



<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>


</body>
</html>




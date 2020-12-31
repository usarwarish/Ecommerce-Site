<?php 
session_start();

if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
<head>
    

	<link rel="stylesheet" href="css/styles.css">

</head>
<body style="background-color:powderblue;">
<?php
if(isset($_SESSION['id'])){ 
	require 'header_logged_in.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<h3>
<?php
echo "Welcome to the settings section : ".$_SESSION['name'];
 ?>
</h3>
</div>


<div class=" row " >
	<div class=" col-lg-offset-2 col-lg-5 col-md-offset-3 col-md-6 col-xs-offset-2 col-xs-8" style="margin-top: 50px; ">
	
		<h2><strong> Change Password</strong> </h2>
		<form method="post" action="sett.php">
						<div class="form-group">
							<input type="Password" class="form-control" name="old-pwd" placeholder="Old Password" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="Password" class="form-control" name="new-pwd" placeholder="New Password" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="re-pwd" placeholder="Re-enter The New Password" required="true" pattern=".{1,}">
						</div>

						<div>
							<button class="btn btn-success" type="submit" value="submit"  name="button">Change</button>					
						</div>
		</form>
	</div>
</div>
<?php } ?>
</body>
</html>
<?php }

else{
	header('location: /FS/signup.php');

}
?>

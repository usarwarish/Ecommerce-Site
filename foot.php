

<?php
if(!isset($_SESSION['id'])){  ?>
<!DOCTYPE html>
<html>
<head>
	

  
</head>
<body>
<footer>
	<div class="container-fluid">
		<div class="row" >
			<div class=" col-md-4 col-xs-12" >
				<h3>Information</h3>
				<ul>
					<li><a href="about_us.php">About Us</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>My Account</h3>
				<ul>
					<li ><a  data-toggle="modal" data-target="#pz">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>Mobile No.</h3>
				<ul>
					<li style="color:red;">+91-9547385308</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<nav class="footer-copyright">
	<div class="container-fluid" style="background-color:#d3cc8d; color: #210F0B;">
		<p><center>Copyright © Gaming ERA. All Rights Reserved | Contact Us: +91 9547385308 | Developed By:  Sarwarish Upadhyay | <a href="mailto:sarwarishupadhyay@gmail.com">sarwarishupadhyay@gmail.com</a></center></p>
	</div>
</nav>
</body>
</html>

<?php require 'login_modal.php'; ?>

<?php } ?>


<?php

	$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
	session_start();
 
	$name=mysqli_real_escape_string($con, $_POST['name']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$message=mysqli_real_escape_string($con, $_POST['message']);

	$user_reg="insert into query(name,email,message) values('$name','$email','$message')";

	$result=mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));

	
?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>

</head>

<body>

    <div class="container" style="margin-top: 80px;">
        <div class="jumbotron" style="border: 5px solid blue;">
        <div style="margin: 50px;">
            <center><p><strong> Thank you for contacting us.<br>Our Representative will contact you soon. <br>P.S. : Usual reply time is max 3hrs </strong></p></center>
            <?php header( "refresh:8; url=/IS/index.php" ); ?>
        </div>
        </div>
    </div>



</body>

</html>


 
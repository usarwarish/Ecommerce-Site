<?php 
session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


        <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&family=Righteous&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="css/styles.css">
    

</head>

<body>
    <div class="container">
        <div class="jumbotron" style="border: 5px solid blue; margin-top:40px">
            <div style="margin: 50px;">
                <center><p><h3>Thank You !! Visit Again</h3> <br>you are being redirected to Index page...</p></center>
			</div>
			
			<div align="center" style="font-size: 18px;">
<p>
<a href="index.php"><button class="btn btn-primary">Start Shopping</button> <br></a> or<br> <button data-toggle="modal" data-target="#pz" class="btn btn-primary">Login</button>
<?php header( "refresh:9; url=/FS/index.php" ); ?>

<?php require 'login_modal.php'; ?>


</p>
</div>

        </div>
    </div>


</body>

<?php

//echo "<center>----Successfully logged out----<br>Thankyou for visiting our site.</center>";
//header("location:/FS/index.php");
?>


	

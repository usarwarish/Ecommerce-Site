



<!DOCTYPE html>
<head>
    

	<<meta charset="utf-8">
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

    <div class="container" style="margin-top: 80px;">
        <div class="jumbotron" style="border: 5px solid blue;">
        <div style="margin: 50px;">
		<?php 
			$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
			session_start();

			if(isset($_SESSION['id']))
			{
				$user_id= $_SESSION['id'];
				$prod_id= $_POST['prodno'];

				if($prod_id <= 6)
				{
					$user_reg="insert into users_products(user_id, product_id) values('$user_id','$prod_id')";
					$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));
					echo "<center><h3>Product Successfully Added to Cart</h3></center>";
		?>
				<div align="center" style="font-size: 18px;">
					<br><br>
				<p>
				<a href="home.php"><button class="btn btn-primary">Continue Shopping</button> <br></a> or<br> <a href="cart.php" class="btn btn-danger">Move to Cart</a>
				</p>
				</div>
				<?php } 
	  			 else
				{ 
					echo "<center>Wrong Product ID <br> Please check user ID before entering.</center>"; ?><br><br>
					<a href="index.php"><center><button class="btn btn-primary">Try again</button></center> <br></a>
					<?php } } ?>
        	</div>
        </div>
    </div>



</body>

</html>

<?php 

	$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));

 	if(isset($_POST['button'])){
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$password=mysqli_real_escape_string($con, $_POST['password']);
		$pass=md5($password);
		$query="select id, name, email, password from users where email = '$email' and password = '$pass' ";
		$result=mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);



		if(mysqli_num_rows($result)==1)
		{
				session_start();
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;
			$_SESSION['lg']=1;


			header("location:/FS/home.php");
		}
		else
		{
?>

	<div style="font-size: 18px;">
	<?php
	echo "<br><br><center>Wrong Username or Password</center><br><br>";  ?>
	</div>

<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
<script src="bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Righteous&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<div align="center" style="font-size: 18px;">
<p>
<a href="index.php"><button class="btn btn-primary">Product page</button> <br></a> or<br> <a href="signup.php"><button class="btn btn-warning">Sign Up again</button></a>
</p>
</div>
</body>
</html>


	<?php 
}
}

?>


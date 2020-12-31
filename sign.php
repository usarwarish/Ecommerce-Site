<?php 
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
session_start();
 if (isset($_POST['button'])) {

$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$contact=mysqli_real_escape_string($con, $_POST['contact']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$pass=md5($password);
$email_pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";

		$query1="select * from users where email = '$email'";
		$result1=mysqli_query($con, $query1) or die(mysqli_error($con));
		

		$total_s=mysqli_num_rows($result1);

	if($total_s == 0)
	{
		$user_reg="insert into users(name,email,password,contact,city,address) values('$name','$email','$pass','$contact','$city','$address')";

		$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));

		$_SESSION['email']=$email;
		$_SESSION['name']=$name;
		$_SESSION['password']=$pass;
		$_SESSION['contact']=$contact;
		$_SESSION['lg']=1;
		$_SESSION['id']=mysqli_insert_id($con);
		require 'successsign.php';
	}
	else{
		echo "<center>Account Already Exists</center><br>";
?>
<!DOCTYPE html>
<html>
<head>
    

<style type="text/css">
	

</style>
</head>
<body>

		<div align="center">
			<a href="signup.php" class="btn btn-primary" type="submit" name="button">Try Signing Up again</a>						
		</div>
</body>
</html>
<?php
	}





}
?>

	

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
<div class="container">
        <div class="jumbotron" style="border: 5px solid blue; linear-gradient(to right, rgb(31, 28, 44), rgb(146, 141, 71)); margin-top:20px;">
        <div style="margin: 50px;">
            <center>

<?php 
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
session_start();
$flg=1;
 
$old_password=mysqli_real_escape_string($con, $_POST['old-pwd']);
$new_password=mysqli_real_escape_string($con, $_POST['new-pwd']);
$re_password=mysqli_real_escape_string($con, $_POST['re-pwd']);

$pattern = "/^[a-zA-Z0-9]+$/";

if(!preg_match($pattern,$new_password))
{
	echo "pattern Mismatch enter it again";
	$flg=0;
	header( "Location: /FS/settings.php" );
	
}

$old_pass=md5($old_password);
$new_pass=md5($new_password);
$re_pass=md5($re_password);

$user_id= $_SESSION['id'];
$user_pass= $_SESSION['password'];

if($flg)
if($old_pass == $user_pass)
{
	if($new_pass == $re_pass)
	{
		
		$update_query="update users set password = '$new_pass' where id = '$user_id'";
		$update_result=mysqli_query($con, $update_query) or die(mysqli_error($con));
		$_SESSION['password']= $new_pass;
		echo "<h3>Password Updated Successfully</h3><br>";
?>
<a href="home.php">Continue Shopping.</a>
<?php
	}
	else
	{
		echo "<h3>Re-Entered password didn't match the newly entered password.</h3>";
	}
}
else
{
	echo "<h3>Old Password entered is wrong.</h3>";
}
?>

<h4>You r being redirected</h4>
</center>

            <?php header( "refresh:10; url=/FS/home.php" ); ?>
        </div>
        </div>
    </div>

<?php 
    $con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    session_start();
    if(isset($_SESSION['id'])){ 
        
        
        $me=$_SESSION['id'];
        $query1="delete from users_products where user_id = '$me' ";
        $res=mysqli_query($con, $query1)  or die(mysqli_error($con));
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
        <div class="jumbotron" style="border: 5px solid blue; margin:20px">
            <div style="margin: 50px;">
                <center><p>Thank You for ordering from E-store. Your order shall be delivered<br>to you within 48 hours. <br><br><br>Order some more Electronic items <a href="home.php" style="color:orange;"> here</a>.</p></center>
            </div>
        </div>
    </div>


</body>

    <?php }
    else{
        header('Location: /FS/index.php');
    }
    ?>
    </html>
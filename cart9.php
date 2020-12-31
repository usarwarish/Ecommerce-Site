<?php
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
session_start();



	if(isset($_SESSION['id']))
	{ 
	require 'header_logged_in.php';
	$temp= $_SESSION['id']; 
	$select= "select * from users_products where user_id='$temp' order by product_id asc ";
    $select_qrray=mysqli_query($con, $select) or die(mysqli_error($con));
    $num_r=mysqli_num_rows($select_qrray);
	//echo $_SESSION['id'];
	//echo mysqli_num_rows($select_qrray);
	
?>

<!DOCTYPE html>
<html>
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

	<div class="container" style="margin-top: 80px; ">
		<div class="row " style="display: flex;
  justify-content: center;
  align-items: center;">
        <div class="col-md-4 order-md-2 mb-4" >

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill" style="float:right;"><?php echo $num_r ?></span>
            </h4>
		

		
		<div style=""></div>
			
		<?php
        $total=0;$ctr=1;
        
        $arr = array(1 => "G268", 2 => "G40", 
                     3 => "GPRO",4 => "Monitor GX",5 => "Mousepad SX",6 => "2080 ti graphic");

		while ($row=mysqli_fetch_array($select_qrray)) { ?>


        
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="padding: 20px 40px;">
            
                <div>
                    <h4 class="text-muted">ITEM NO : <?php echo $ctr++;?></h4>
                    <br>
                    <h6 class="my-0">Product ID : <?php echo "#".$row['product_id'] ; $t= $row['product_id']; ?></h6>
                    <small class="text-muted">Product : <?php echo $arr[$t];?></small>
                
                    
                </div>
                <br>
                <?php  
						$sele="select * from products where id = '$t'";
						$sele_qrr=mysqli_query($con, $sele) or die(mysqli_error($con));
						$ress=mysqli_fetch_array($sele_qrr);
						$total = $total + $ress['price'];
				?>
                <div>
                    <span style="float:left"> PRICE :</span>
                    <span class="text-muted" style="float:right"><?php echo "Rs. ".$ress['price']."/-" ; ?></span>
                    <br>
                </div>
            </li>
        </ul>

				

	    <?php } ?>  <!--BEWARE : end of while loop-->

        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between">
                <span>Total (INR) :</span>
                <strong style="float:right;"><?php echo "Rs. ".$total."/-"; ?></strong>
            </li>
        
        </ul>
			
            <br><br>
			<center>
			<a href="success.php" type="button" class="btn btn-primary btn-lg"> Place Order </a>
			</a>
			</center>
	         <!-- cart after this step should again become empty.-->



		<?php } ?>
        </div>
        </div>
	</div><!-- container closed-->
</body>
</html>
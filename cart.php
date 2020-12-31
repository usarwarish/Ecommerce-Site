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
	
?>

<!DOCTYPE html>
<html>
<head>
    

<style type="text/css">
	

</style>
</head>
<body style="font-family: 'Piedra', cursive; font-family: 'Righteous', cursive; background-color: #5de6de;
background-image: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%);   margin-bottom: 25px;
">

	<div class="container" style="margin-top: 80px; ">
		<div class="row " style="display: flex;
  justify-content: center;
  align-items: center; ">
        <div class="col-md-4 order-md-2 mb-4" >

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted" style="color:white;">Your Cart </span>
                <span class="badge badge-secondary badge-pill" style="float:right;"><?php echo $num_r ?></span>
            </h4>
		
            <?php
            if($num_r==0){ ?>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="padding: 20px 40px; ">
                <div>
                    <h4 class="text-muted">ITEM No. : <?php echo 'X'?></h4>
                    <br>
                    <h6 class="my-0">Product ID : <?php echo "#xx-xx-007" ; ?></h6>
                    <small class="text-muted">Product : <?php echo "xxx-985";?></small>
                
                    
                </div>
                <br>
                <div>
                    <span style="float:left"> PRICE :</span>
                    <span class="text-muted" style="float:right"><?php echo "Rs. 000/-" ; ?></span>
					
                    <br>
                </div>
				
            </li>
            </ul>
            <?php }?>
		<div style=""></div>
			
		<?php
        $total=0;$ctr=1;$t=0;
        
        $arr = array(1 => "G268", 2 => "G40", 
                     3 => "GPRO",4 => "Monitor GX",5 => "Mousepad SX",6 => "2080 ti graphic");

		while ($row=mysqli_fetch_array($select_qrray)) { ?>


        
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed" style="padding: 20px 40px;">
                <div>
                <a href="cart_remove.php?product_id=<?=$row['product_id']?> " class="btn btn-danger btn-xs" role="button" style="float:right; color:white; margin:-10px -20px">X</a>

					
				</div>
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
        <?php if($total==0) { echo "<br>.<br>.<br>";}?>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between">
        
                <span>Total (INR) :</span>
                <strong style="float:right;"><?php echo "Rs. ".$total."/-"; ?></strong>
            </li>
        
        </ul>
			
            <br>
            <?php
            echo"<center>";
            if($total>0){
			echo "<a href='success.php' type='button' class='btn btn-primary btn-lg btn-block'> Place Order </a>";
            }
            else{
                echo "<a href='home.php' type='button' class='btn btn-danger btn-lg'> Add Items To Cart </a>";
        
            }
            echo "</center>";
            ?>
	         



        <?php } 
        
        else{
            header('location: /FS/signup.php');

        }
        ?>
        </div>
        </div>
	</div>
</body>
</html>
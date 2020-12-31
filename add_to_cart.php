
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


        <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&family=Righteous&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="css/styles.css">

<style type="text/css">
	

</style>
</head>
<body>



<div class="modal fade" id="all" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button .btn-lg" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add to Cart?</h4>
            </div>
            <div class="modal-body">
                <h4>Enter Product's unique ID which is written just above every product.<br>Are you sure you want to add this product to cart?</h4>

                 <form method="post" action="cart_added.php">
                    <input type="text" class="form-control" placeholder="Product Unique ID" name="prodno"/><br><center>
                    <button class="btn btn-primary" type="submit" value="button" name="button">Add to Cart</button></center>
                </form>


            </div>
           
        </div>
        
    </div>
</div>


</body>
</html>

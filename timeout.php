

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>
    
<script>
    $(document).ready(function($) {

if (window.history && window.history.pushState) {

$(window).on('popstate', function() {
var hashLocation = location.hash;
var hashSplit = hashLocation.split("#!/");
var hashName = hashSplit[1];

if (hashName !== '') {
  var hash = window.location.hash;
  if (hash === '') {
    alert('Back button was pressed.');
      window.location='https://web.whatsapp.com';
      return false;
  }
}
});

window.history.pushState('forward', null, './#forward');
}

});


</script>

</head>

<body>

    <div class="container" style="margin-top: 80px;">
        <div class="jumbotron" style="border: 5px solid blue;">
        <div style="margin: 50px;">
            <center><p>You have been sucessfully Signed OUT<br/><br/>DUE TO TIMEOUT</p></center>
            <?php header( "refresh:8; url=/FS/index.php" ); ?>
        </div>
        </div>
    </div>



</body>

</html>
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
    <script>
    $(document).ready(function(){
        $("button[name='thj']").click(function(){
            
            $("#myNavbar").toggle();
            //alert("The paragraph was clicked.");
        });
    });
	</script>
    
    
        

<style type="text/css">

</style>
</head>
<body style="color: #210F0B;">

<div class="container-fluid" id="content" style="color: #210F0B;">
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#002200; font-family: 'Piedra', cursive; ">
                <div class="container">
                    <div class="navbar-header">


                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#myNavbar" id = "navbar0 navbar1" name="thj">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" id="tab2" href="index.php" style="color: white; ">G a m i n g   |   E R A</a>
                    </div>

                    <div class="navbar-collapse collapse n2" id="myNavbar" style="color: #210F0B;">
                        <ul class="nav navbar-nav navbar-right mr-auto" style="color: #210F0B;">
                        <li><a  href = "index.php"><span class = "glyphicon glyphicon-home"></span> Home </a></li>
                            <li><a  href = "signup.php"><span class = "glyphicon glyphicon-user"></span> Sign Up </a></li>
                            <li><a  data-toggle="modal" data-target="#pz" ><span class = "glyphicon glyphicon-log-in"></span> Login </a></li>
                            <li><a  href = "about_us.php"><span class = "glyphicon glyphicon-list"></span> About Us </a></li>
                            <li><a  href = "contact_us.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>

    
<?php require 'login_modal.php'; ?>


</body>
</html>
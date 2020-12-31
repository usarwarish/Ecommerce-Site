<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">


</head>
<body style="font-family: 'Piedra', cursive; font-family: 'Righteous', cursive; background-color: #63d471;
background-image: linear-gradient(315deg, #63d471 0%, #233329 74%); color:brown">
<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
}
else{
	require 'header_logged_in.php';
}
	?>
<div class="row">
	<div class="container" style="margin-top: 80px; margin-bottom: 50px; ">
	<div class="row-style-login-page-pannel" >
		<div class=" col-md-4 col-sm-6 col-xs-12" >
			<div class="panel panel-default" style="border: 2px solid purple;">
				<div class="panel-heading" style="background-color:#d3cc8d;" ><h4>WHO WE ARE</h4>
				</div>
				<div class="panel-body">
					<!--put mobile pic. -->
					<img src="images\GE.png" class="center" style="display: block;margin-left: auto;margin-right: auto;">
					<br><br>
					<p><strong>G | E</strong> is an Indian professional eSports team that is a registered company with its CSGO, Tekken, Need For Speed, Track Mania Series, Forza Motor Sports and various other racing game squads.Formed by a team of aficionados of CSGO, the team gained recognition in the year 2010 at Chitkara bringing down the Goliaths of the game of that time! Team has just grown since then to become a leading face in the CSGO community in India with their reputation and stature preceding them.<br>At <strong>G | E</strong> we always aim for the best and no matter what the situation is we deliver.<br>Mission statement – To make a team with best of friends and enjoy the game together. Because if you enjoy each others company in game you don’t have to worry about the results.</p>


					</div>
				</div>
			</div>


			<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default" style="border: 2px solid purple;">
				<div class="panel-heading" style="background-color:#d3cc8d;"><h4>OUR HISTORY</h4>
				</div>
				<div class="panel-body">
					<a href="#" >-2012-</a>
					<p>Company was founded by Sir. Sarwarish Upadhyay inventor, innovator and entrepreneur in 2012, credited with developing the predecessor to online shopping and EX coach of GE. The idea came when people were fascinated by our team <strong>G | E</strong> 's performance and wanted to buy what our players recommended and used. Immediately after the discussion he quickly planned and implemented his idea.</p>

					<a href="#">-2014-</a>
					<p>In the late 2014, E-store was started to become popular. People began to shop online and in the same year E-store expanded its limits and switched to a fully electronic product based firm.</p>

					<a href="#">-2017-</a> 
					<p>The era of internet has begun and people started to depend more on internet than anything else and that brought to a golden opportunity to online stores. E-store became the second major online ecommerce store and was awarded by many highly reputed magazines.</p>

					<a href="#">-2020-</a>
					<p>Now, E-store has became the world wide best #1 ecommerce site in the catagory of E-sports and is mostly trusted by commom man, as we provide best products at the lowest cost possible. E-store will always be there for it's costumers.</p>



					</div>
				</div>
			</div>







			<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default" style="border: 2px solid purple;">
				<div class="panel-heading" style="background-color:#d3cc8d;"><h4>OPPORTUNITIES</h4>
				</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img src="images\vacancy.jpg" class="center"><br><br>
					<h4>Available Roles:</h4>
					<ol>
						<li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 month internship]</li><br>
						<li>Business Apprentice [6 month internship]</li><br>
						<li>Manager at back-end operations [Full Time Role + also available as a 6 month internship]</li>
						<li><strong>TEAM COACH FOR VALORANT !!</strong></li>
					</ol>


					</div>
				</div>
			</div>




		</div>
	</div>
</div>

<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>
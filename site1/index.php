<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>index</title>
		<meta name="description" content="" />
		<meta name="author" content="admin" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/sample.php"/>
	</head>
	<body>
		<div id="wrapper">
			 <div id="header">
			 	 <div class="float-left">
			 	 	<img src="css/images/peak.png"/>
			 	 </div>
			 	 <div class="float-left">
			 	  <h1>The Appleman Pvt Ltd</h1>
			 	</div>
			 	<div class="clear"></div>
			 </div>
			 <div id="nav">
			  <ul>
			  	<li><a href="#">Home</a></li>
			  	<li><a href="#">About us</a></li>
			  	<li><a href="#">Contact us</a></li>
			  </ul>
			 </div>
			 <div id="content">
			 	<div class="float-left h500p w20p"></div>
			 	<div class="float-left h500p vline">
			 		<?php
			 		   for($i=1;$i<=10;$i++) {
			 		   	 echo "<br/>$i";
			 		   }
			 		?>
			 		
			 	</div>
			 	<div class="clear"></div>
			 </div>
			 <div id="footer">
			 	 &copy; The Appleman Pvt Ltd - 2014
			 </div>
		</div>
	</body>
</html>

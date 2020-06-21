 <?php
require_once('config.php');
?>
 <!DOCTYPE html>
<html>
<head>
	<title>BestowerPortal</title>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/style.css"><--!-->
      <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
      <script type="js/script.js"></script>
</head>
<body>
	     <style>

    .ui-page { background: lightblue;}

    </style>

	<div data-role="header" id="home" data-position="fixed">
		<h1>Location Based Bestower Portal</h1>
		<a href="#anylink" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>
		<a href="login1.php" rel="external" data-icon="grid" class="ui-btn-right">Login</a>
          
          </div>
         <!--
          <style>
          .ui-btn ui-icon-home ui-btn-icon-left{ background: red;}
      </style>
      <--!-->

          
	
	<div data-role="navbar">
		<ul>
			<li><a href="home.html" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-location" rel="external">Location</a></li>
			<li><a href="criteriadonation.html" rel="external">Criteria for Donation</a></li>
			<li><a href="calculator1.html" rel="external" button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-myicon">Calculator</a></li>
		</ul>
		</div>
		

		<div data-role="footer" data-id="foo1" data-position="fixed" data-theme="b">
            <div data-role="navbar">
            	<ul>
            		<li><a href="#">Donate</a></li>
            		<li><a href="#">Make A Difference</a></li>
            		<li><a href="contactus.html" rel="external">ContactUs</a></li>
            	</ul>
            </div>
		</div>

</body>
</html>
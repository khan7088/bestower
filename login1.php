<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
      <script type="js/script.js"></script>
</head>
<body>
	 <style>

    .ui-page { background: lightblue;}

    </style>
    <div data-role="page" id="login_screen" >
	<div data-role="header" data-position="fixed">
		<h1>LogIn For Donor</h1>
		<a href="signupform.php" rel="external" data-icon="grid" class="ui-btn-right">Register</a>
		</div>
		
		<div data-role="main" class="ui-content">
			<div data-role="fieldcontain">
			<label for="username">Username</label>
			<input type="text" id="username" placeholder="enter username">
		</div>
		<div data-role="fieldcontain">
			<label for="password">password</label>
			<input type="text" id="password" placeholder="enter your password">
		</div>
		<div data-role="fieldcontain">
			<label></label>
			<a href="#" data-role="button">Login</a>

		</div> 
		</div>

	</div>

</body>
</html>
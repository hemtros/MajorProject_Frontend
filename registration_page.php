<html>
<head><title></title>
<link href="styles/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<link href="styles/forms.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/bootstrap.js"> </script>
<script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>

</head>

<body>

<div id="banner">
	<a href="index.php"><img src="images/logo.png" /></a><span id="websiteheading">Product Monitoring Service</span>

	<span id="tagline">(Mining Social Media to monitor your product)</span>
</div>

<div id="navbar">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="#">Monitor</a></li>
	<li><a href="#">Support</a></li>
	<li><a href="aboutus.php">About Us</a></li>
	</ul>
</div>

<div id="sidebar">
	<br /><br />
		<a href="registration_page.php"><div id="registernav">Register</div></a>
		<a href="login_page.php"><div id="loginnav">Login</div></a>
</div>  <!-- end of sidebar   -->

<div id="content">
	
	<form class="register">
			    <h1>Join, Please? <img src="images/lock_fill.svg" class="secure" /></h1>
			    <label for="email">Email</label>
			    <input type="email" alt="email" id="email" placeholder="romeo@juliet.com" required="">
			    
			    <label for="firstname">First Name</label>
			    <input type="text" alt="first name" id="firstname" placeholder="First Name" required="">
			    
			    <label for="lastname">Last Name</label>
			    <input type="text" alt="last name" id="lastname" placeholder="Last Name" required="">
			    
			    <label for="password">Password</label>
			    <input type="password" alt="password" id="password" placeholder="Password" required="">
			    
			    <label for="passwordagain">Password Again</label>
			    <input type="password" alt="password again" id="passwordagain" placeholder="Password Again" required="">
			    					
			    <button type="submit" alt="Sign Up" id="button">Sign up for free!</button>	
			</form><!-- .register -->

</div>

<div id="footer">
	
	<p>&copy;&nbsp;Copyright 2013</p>
</div>



</body>
</html>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Account Detail</title>
		<link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="css/AccountSetting.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
	
	<header>
		<?php include"headeradmin.php" ?>
	</header>
	
	<div class="content">
	
	
		<br>  
	<div class="MiddleContent">
	
	<form action="/AccountSetting.html">
  		<div class="container">
    	<h1>Admin Control: Edit User</h1>
    	
    	
    	<hr>
    		<label for="userID">User ID</label><br>
  			<input type="text" id="userID" name="userID" value="User ID"><br>
  			
    		<label for="uname">Username</label><br>
  			<input type="text" id="uname" name="uname" value="Username"><br>
  			
    		<label for="email">Email</label><br>
  			<input type="text" id="email" name="email" value="Email"><br>

    		<label for="address">Address</label><br>
  			<input type="text" id="address" name="address" value="Address"><br>
  			
    		<label for="phone">Phone Number</label><br>
  			<input type="text" id="phone" name="phone" value="Phone Number"><br>
    
    	<hr>
  		
	</form>
	
	<button onclick="window.location.href='admin.php';">Save</button>
	
	</div>
	</div>
	</body>
</html>

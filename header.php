<div class="topnav">
	<a href="index.php">Home</a>
	<a href="Recent.php">Recent</a>
	<a href="Popular.php">Popular</a>
	<a href="Genre.php">Genre</a>
	<a href="About.php">About Us</a>
	<div class="dropdown">
		<button class="dropbtn">Account
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="AccountDetails.php">Account Details</a>
			<a href="Order.php">Order</a>
		</div>	
	</div>
	<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  			<input type="text" placeholder="Search Anime" name="search2">
  			<button type="submit"><i class="fa fa-search"></i></button>
	</form>
           	
     <a href="Cart.php"><i class="fa fa-shopping-basket" style="font-size:26px; float:right; width: auto; margin-right: 10%"></i></a>
	
	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto; float:right; margin-right: 1%; background-color: #9999ff">Sign Up</button>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right; margin-right: 10%; background-color: #b366ff">Login</button>
	
	<?php include"signup.php" ?>
	<?php include"signin.php" ?>

</div>
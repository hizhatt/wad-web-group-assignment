<!-- The Modal (contains the Sign Up form) -->
		<div id="id02" class="modal">
  			
  			<form class="modal-content animate" action="/action_page.php">
  			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    		<div class="container">
     			
      			<h1>Sign Up</h1>
      			<p>Please fill in this form to create an account.</p>
      			<hr>
      			<label for="email"><b>Email</b></label>
      			<input type="text" placeholder="Enter Email" name="email" required>
      			
      			<label for="uname"><b>Username</b></label>
      			<input type="text" placeholder="Enter Username" name="uname" required>

      			<label for="psw"><b>Password</b></label>
      			<input type="password" placeholder="Enter Password" name="psw" required>

      			<label for="psw-repeat"><b>Confirm Password</b></label>
      			<input type="password" placeholder="Confirm Password" name="psw-repeat" required>

      			<label>
        			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      			</label>

      			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      			<div class="clearfix">
      				<button type="button" class="cancelbtn">Cancel</button>
      				<button type="submit" class="signupbtn">Sign Up</button>
    			</div>
    			</div>
  				</form>
			</div>
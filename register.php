<?php
session_start();

 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - Register");
outputBannerNavigation("Register");

?>

	<div class="container">
		<div class="login-box">
			<div class="row">
			<img class="jumbo-img" src="img/strike.jpg">
				<div class="col-md-6 register-box">
					<h3>Do you want to play ? Please Register Here !!</h3>
					<form action="registration.php" method="post">
					<div class="form-group">
						<label>
							Username
						</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>
							Password
						</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
					<br>
					<a href="login.php">Go back to Login Page</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php  outputFooter(); ?>

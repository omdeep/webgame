<?php
session_start();

 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - Login");
outputBannerNavigation("Login");
?>

<div class="container">
    <div class="login-box">
        <div class="row">
            <img class="jumbo-img" src="img/battle.png">
            <div class="col-md-6 register-box">
                <h3>Do you want to play ? Please Login Here !!</h3>
                <form action="validation.php" method="post">
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
                    <button type="submit" class="btn btn-primary">Login</button>
                    <br>
                    <a href="register.php">Not a member yet ?? Please Register Here</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php  outputFooter(); ?>

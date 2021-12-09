<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<meta content="width=device-width, initial-scale=1" name="viewport">';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<link href="style.css" rel="stylesheet">';
    echo '</head>';
    echo '<body>';
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
  
    echo '<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">';
    echo '<div class="container-fluid">';
    echo '<a class="navbar-brand" href="login.php"><img class="logo" src="img/logo.jpg"></a>';
    echo '<button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>';
    echo '<div class="collapse navbar-collapse" id="navbarResponsive">';
    echo '<ul class="navbar-nav ml-auto">';
    echo '<li class="nav-item">';
    echo '<a class="nav-link active" href="home.php">Home</a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="game.html">Game</a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="about.php">About</a>';
    echo '</li>';				
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="board.php">Leaderboard</a>';
    echo '</li>';    
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="register.php">Register</a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="login.php">Log In</a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';

    
    //Array of pages to link to
    $linkNames = array("Home", "Game", "About", "Leaderboard ","Log In");
    $linkAddresses = array("home.php", "game.html", "about.php", "board.php", "login.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';
}

//Output

//Outputs closing body tag and closing HTML tag
function outputFooter(){
    echo '<div class=fixed-bottom>';
    echo '<footer>';
	echo '<div class="container">';
    echo '<div class="footer-copyright text-center py-3">© 2021 Copyright : Built with ❤️ by Bhavish Megha</div>';
	echo '</div>';
	echo '</footer>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
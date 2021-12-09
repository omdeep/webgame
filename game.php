<?php
session_start();


 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - The Game");
outputBannerNavigation("Game");

?>

<div class="container">
    <div class="row justify-content-center text-center mt-5">
        <img class="game-size"src="img/play.gif">
    </div>
</div>

    <?php  outputFooter(); ?>


<?php
session_start();

 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - About");
outputBannerNavigation("About");

?>

<div class="container py-3">
    <div class="row justify-content-center py-5">
        <div class="col-lg-6">
            <h3 class="pb-4">Introduction</h3>
            <p>Welcome to Snake Game, a blend of modern technology and retro game, but the Players are Real !!</p>
            <p>The Snake game is a charming and simple challenge to play during downtime.

                To play Snake, use the arrow keys to move the snake left, right, up, or down towards the apples. As you
                eat apples, the snake will get longer and more difficult to avoid.

                To get the Snake world record, you must avoid eating your tail and hitting the walls or borders of the
                screen.

                Like other arcade games, Snake is all about angles and physics. Make sure you turn at the right time,
                and use the grid to judge when you need to change directions.</a>
        </div>
        <div class="col-lg-6"><img class="img-fluid jumbo-img" src="img/snake1.png"></div>
    </div>
    <div class="row justify-content-center py-5">
        <div class="col-lg-6">
            <p>Use Arrow Keys to move the snake</p>
            <p>The player controls a dot, square, or object on a bordered plane. As it moves forward, it leaves a trail
                behind, resembling a moving snake. In some games, the end of the trail is in a fixed position, so the
                snake continually gets longer as it moves. In another common scheme, the snake has a specific length, so
                there is a moving tail a fixed number of units away from the head. The player loses when the snake runs
                into the screen border, other obstacle, or itself.</a>
        </div>
    </div>
</div>

<?php  outputFooter(); ?>


<?php
session_start();


 //Include the PHP functions to be used on the page 
include('common.php'); 
//Output header and navigation 
outputHeader("Snake Game - Home");
outputBannerNavigation("Home");
?>

<!--- Start Jumbotron -->
<div class="jumbotron three-col">
    <div class="container">
        <h2 class="text-center">BUILT BY THE BEST</h2>
        <div class="row justify-content-center text-center">
            <div class="col-10 col-md-4">
                <div class="feature">
                    <img class="jumbo-img" src="img/snake-yas.gif">
                    <h3>The Game</h3>
                    <p>Snake game that you've enjoyed for decades is one of the best. Move the deadly reptile towards
                        the
                        dots but don't hit the tail, the border, or any walls.</p>
                </div>
            </div>
            <div class="col-10 col-md-4">
                <div class="feature">
                    <img class="jumbo-img" src="img/snake-hypnotize.gif">
                    <h3>Highest Score</h3>
                    <p>Become a Master in snake and Aim for the highest Score. The Highest points for the Snake
                        game is set at 226 points. Good luck trying to beat this!</p>
                </div>
            </div>
            <div class="col-10 col-md-4">
                <div class="feature">
                    <img class="jumbo-img" src="img/snake-yas.gif">
                    <h3>Classic Game</h3>
                    <p>In the 70s appeared the first snake game and it is still fun today. This classic game brings out
                        the beast in you and help you to aim higher and further in life.
                    </p>
                </div>
            </div>
        </div>
        <!--- End Row -->
    </div>
    <!--- End Container -->
</div>
<!--- End Jumbotron -->

<!--- Two Column Section -->
<div class="container py-3">
    <div class="row justify-content-center py-5">
        <div class="col-lg-6">
            <h3 class="pb-4">Welcome to the Most Exciting Classic Game</h3>
            <p>Welcome to Snake Game, a blend of modern technology and retro game, but the Players are Real !!</p>
            <p>In this game you control the deadly sanke and your aim is simple to collect more and more dots and
                prevent the snake from hitting anything in its course</p><a class="btn btn-purple btn-lg"
                href="game.php">Dare to Play ?</a>
        </div>
    </div>
</div>
<!--- End Two Column Section -->

<?php  outputFooter(); ?>






<!--- Script Source Files -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>

</html>
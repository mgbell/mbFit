<?php  

/* HOME PAGE */ 
$pageTitle = "mbFit";

?>

<title><?php echo $pageTitle; ?></title>

<?php 

/* Load page */ 
include "./includes/parts/page.php"; 

?>

<!-- Intro title and text -->
<div class="container">
    <div class="row">
        <h2 class="grey-text text-darken-2 center">Welcome to mbFit</h2>
        <div class="row"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eligendi qui culpa magni architecto iure quas vel natus?</p>
    </div>
</div>

<!-- cards -->
<div class="container">

    <div class="row">

		<!-- card 1 -->
        <div class="row">
            <div class="card">
                <div class="card-image">
                    <img height="180px;" src="images/background-1.jpg">
                    <span class="card-title">Bodyweight</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#" class="black-text">Explore workouts</a>
                </div>
            </div>
        </div>

		<!-- card 2 -->
        <div class="row">
            <div class="card">
                <div class="card-image">
                    <img height="180px;" src="images/background-2.jpg">
                    <span class="card-title">Cardio</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="./cardio.php" class="black-text">Explore workouts</a>
                </div>
            </div>
        </div>

    </div>

</div>
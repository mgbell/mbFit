<?php $hostslug = $_SERVER['REQUEST_URI']; ?>

<nav>
  	<div class="nav-wrapper light-blue darken-2">
    	<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    	<a href="./index.php" class="brand-logo">mbFit<?php 

    	if ($hostslug == '/mbfit/index.php') {

    		echo "";

    	} else {

    		echo " - " . $pageTitle;
    	}

    	?>
    		
    	</a>
  	</div>
</nav>

<ul class="sidenav" id="mobile">
  	<li><a href="./index.php">Home</a></li>
 	<li><a href="./bodyweight.php">Bodyweight</a></li>
 	<li><a href="./cardio.php">Cardio</a></li>
  	<li><a href="./about.php">About</a></li>
</ul>
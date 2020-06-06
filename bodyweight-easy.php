<?php  

/* BODYWEIGHT PAGE */ 
$pageTitle = "BW1";

?>

<title><?php echo $pageTitle; ?></title>

<?php  

/* Load page */ 
include "./includes/parts/page.php";

?>

<div class="center">
	
	<div class="row">

		<i id="letsGo" onclick="bodyweightEasy();" style="font-size: 200px;" class="material-icons">play_circle_outline</i>

		<p id="theInstruction"></p>

	</div>

</div>

<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>I.T DEPARTMENT</h2>

		<?php
			if(isset($_SESSION['u_uid']))
			{
				echo "<marquee>You Are Logged In!!</marquee><br><br>";

				echo 	'<form action = "includes/process.inc.php" method = "POST" class = "signup-form">       
								
								<input type = "text" id = "meter" name = "meter" placeholder = "Meter Number">
								<br><br>
								<input type = "text" id = "contact" name = "contact" placeholder = "Contact Name">
								<br><br>
								<input type = "text" id = "problem" name = "problem" placeholder = "Problem Description">
								<br><br>
								<button type = "submit" name = "submit">Submit</button>

							</form>';
			}
		
		?>

	</div>
</section>

<?php
	include_once 'footer.php';
?>


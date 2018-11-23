<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Results</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
<?php
	$answers = array('3', '1', '1', '3', '0', '2', '1', '3', '1', '0', '0', '3', '1', '3', '1', '2', '1', '1', '1', '3');

	if (isset($_POST)) {
		$results = array();
		foreach ($answers as $count => $answer) {
	
				if ($_POST[$count] == $answer) {
					array_push($results, $answer);
				}
			}
	 	}
		$total = count($results);
			switch ($total) {
				case ($total < 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Really?				
							</h1>
							<p>
								You're much better off working at Burger King 🍔
							</p>
						</section>
					<?php
					break;

				case ($total < 10 && $total >= 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div><br>

							<h1>
								Really?											
							</h1>
							<p>
								You're much better off working at Burger King 🍔🍟	
							</p>
						</section>
					<?php
					break;
				
				case ($total >= 10 && $total < 16):
					?>
						<section class="okay">	
							<div class="score"><?php echo $total; ?><span>/20</span></div><br>

							<h1>
								Getting There
							</h1>
							<p>
								But I think you should try again 😁
							</p>
						</section>
					<?php
					break;

				case ($total >= 16) :
					?>
						<section class="excellent">
							<div class="score"><?php echo $total; ?><span>/20</span></div><br>
							<h1>
								Well Done!
							</h1>
							<p>
								I knew you had it in you 🙌
							</p>
						</section>
					<?php
					break;
		}
?>

	<section class="submit">
		<form action="/index.php" method="post">
			<h2>Play Again?</h2>
			<input type="submit" value="Play">
		</form>
	</section>
	
</body>
</html>
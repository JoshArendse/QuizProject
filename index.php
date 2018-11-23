<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/main.css">
	<title>Naruto Quiz</title>
</head>

<body id="test">

	<form action='/results.php' method="post">
		<section class="introduction">
			How well do you know your Naruto Shippuden?
		</section>
<?php
	$_SESSION['quizValue'] = $quizValue = array(

		array(
		'q' => 'Who was Naruto\'s teacher at the ninja academy?', 
		'Sarutobi', 
		'Jiraiya', 
		'Kakashi', 
		'Iruka',
		'none'
	),

		array(
		'q' => 'What village does Naruto belong to? ', 
		'The Hidden Sand Village', 
		'The Hidden Leaf Village', 
		'The Hidden Sound Village', 
		'The Hidden Rain Village',
		'none'
	),

		array(
		'q' => 'Who went against who in the last round of the chunin exams?', 
		'Sasuke vs Shino', 
		'Shikamaru vs Temari', 
		'Naruto vs Kankuro', 
		'Neji vs Gaara',
		'none'
	),

		array(
		'q' => 'What is the name of the Tailed-Beast inside Gaara? ', 
		'Genbi', 
		'Nekomata', 
		'Kurama', 
		'Shukaku',
		'none'
	),

		array(
		'q' => 'Who is the second hokage of Konoha?', 
		'Tobirama Senju', 
		'Hiruzen Sarutobi', 
		'Hashirama Senju', 
		'Minato Namikaze',
		'none'
	),

		array(	
		'q' => 'Who was the first ninja to be attacked by Naruto\'s Rasen-Shuriken?', 
		'Orochimaru', 
		'Pain', 
		'Kakuzu', 
		'Sasuke',
		'none'
	),

		array(
		'q' => 'Which Akatsuki member killed Asuma?', 
		'Kakuzu', 
		'Hidan', 
		'Deidara', 
		'Pain',
		'none'
	),

		array(
		'q' => 'Who among these people became jonin first?', 
		'Ino', 
		'Choji', 
		'Kiba', 
		'Neji',
		'none'
	),

		array(
		'q' => 'Who killed Danzo?', 
		'Itachi', 
		'Sasuke', 
		'Naruto', 
		'Kakashi',
		'none'
	),

		array(	
		'q' => 'Who is the head of the Intelligence Division in the Fourth Great Ninja War?', 
		'Inoichi Yamanaka', 
		'Kakashi Hatake', 
		'Kabuto Yakushi', 
		'Anko Mitarashi',
		'none'
	),

		array(	
		'q' => 'Who was suggested as hokage while Tsunade was in a coma?', 
		'Danzo', 
		'Sakura', 
		'Shikamaru', 
		'Kakashi',
		'none'
	),

		array(	
		'q' => 'Who destroyed the boulder to get in the cave where Deidara and Sasori had Gaara? ', 
		'Neji', 
		'Ten-Ten', 
		'Naruto', 
		'Sakura',
		'none'
	),

		array(
		'q' => 'Who revived Gaara when the Tailed-Beast was taken out of him?',
		'Tsunade', 
		'Chiyo', 
		'Temari', 
		'Sakura',
		'none'
	),

		array(
		'q' => 'What\'s the name of Shizune\'s pet pig?', 
		'Gamabunta', 
		'Paku', 
		'Manda', 
		'TonTon',
		'none'
	),

		array(	
		'q' => 'Who had amnesia as child?', 
		'Pain', 
		'Kabuto', 
		'Orochimaru', 
		'Tobi',
		'none'
	),

		array(	
		'q' => 'Which country has samurai?', 
		'Land of Fire', 
		'Land of Waves', 
		'Land of Iron', 
		'Land of Rice-Cakes',
		'none'
	),

		array(	
		'q' => 'Who was Madara once close friends with?', 
		'Tobirama Senju', 
		'Hashirama Senju', 
		'Hiruzen Sarutobi', 
		'Itachi Uchiha',
		'none'
	),

		array(	
		'q' => 'Who became the Jinchuuriki of the Ten Tails? ',
		'Sasuke', 
		'Madara', 
		'Obito', 
		'Kakashi',
		'none'
	),

		array(	
		'q' => 'What does Gaara\'s forehead tattoo stand for? ', 
		'Hate', 
		'Love', 
		'Sand', 
		'Blood',
		'none'
	),

		array(	
		'q' => 'Which one is Deidara\'s highest form of explosive clay? ', 
		'C0', 
		'C3', 
		'C2', 
		'C1',
		'none'
		)

	);

?>
<?php
	for ($i = 0; $i < count($quizValue); $i++) { ?>

	<section class='square'>
			<h2>
				Question <span class="num"> <?php echo $i+1 ?> </span>
			</h2>
			<p>
				<?php echo $quizValue[$i]['q']; ?>
			</p>
			<section class='grid'>
			<?php 
				$x = 0;
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 

				?>
				<input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>">
				<label class="option" for="<?php echo $n ?>"><?php echo $quizValue[$i][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
			<input type="radio" name="<?php echo $i; ?>" value="4" checked="checked">
			</section>
		</section>

	<?php }
?>

	<section class="submit">
		<h2>Submit Your Results!</h2>
			<input type="submit" value="Submit!">
	</section>
	</form>


</body>
</html>
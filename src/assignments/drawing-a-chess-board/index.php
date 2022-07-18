<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP School</title>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/assets/css/main.css" rel="stylesheet">
	</head>
	<body>
		<?php 
			$size = filter_input(INPUT_GET,'size', FILTER_VALIDATE_INT );
			if($size === NULL){echo 'You need to enter number.';}
			elseif($size === FALSE){echo 'Chess board size needs to be a number.';}
			elseif($size > 20 || $size < 2){echo 'Chess board size needs to between 2 and 20.';}
			else{
				echo '<table class="c-chess-board">';
				for ($i=1; $i<=$size; $i++){
					echo '<tr>';
					if($i % 2 == 0){
						for($j=1; $j<= $size; $j++){
							if($j % 2 == 0 ){echo '<td class="c-chess-board__cell c-chess-board__cell--light"></td>';}
							else{echo '<td class="c-chess-board__cell c-chess-board__cell--dark"></td>';}
							}
						}
					else{
						for($j=1; $j<= $size; $j++){
							if($j % 2 == 0 ){echo '<td class="c-chess-board__cell c-chess-board__cell--dark"></td>';}
							else{echo '<td class="c-chess-board__cell c-chess-board__cell--light"></td>';}
							}
						}
						echo '</tr>';

					}
				echo '</table>';
			}
		?>
		

	</body>
</html>

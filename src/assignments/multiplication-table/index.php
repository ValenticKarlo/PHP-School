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
		define("CONSTANT", 10);
		echo '<p class="text-center">' . CONSTANT . 'x' . CONSTANT . 'Multiplication Table</p>';
			echo '<table class="table w-auto mx-auto text-center">';
			
				for($i=0;$i<=CONSTANT;$i++){
					if($i == 0){
						echo '<tr>'. '<th>';
						if($i == 0){
							for($j=1;$j<=CONSTANT;$j++){
								echo '<th>'. $j .'</th>';
							}
							// echo '<br /n>';
						}
						else{
							for($j=1;$j<=CONSTANT;$j++){
								$rez = $j*$i;
								echo '<td>'. $rez .'</td>';
							}
							// echo '<br /n>';
						}		
						echo '</th>'.'</tr>';
					}
					else{

						echo '<tr>'. '<th>'. $i;
						if($i == 0){
							for($j=1;$j<=CONSTANT;$j++){
								echo '<th>'. $j .'</th>';
							}
							// echo '<br /n>';
						}
						else{
							for($j=1;$j<=CONSTANT;$j++){
								$rez = $j*$i;
								echo '<td>'. $rez .'</td>';
							}
							// echo '<br /n>';
						}
						echo '</th>'.'</tr>';

					}
				}
			echo '</table>';


		?>	
	</body>
</html>

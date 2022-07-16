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
			
			if(intval($_GET["size"])< 5){
				echo 'It has to be 5 or more.';
			}
			else{
				$size = intval($_GET["size"]);
				$counter = 0; 

				for($i = 1;$i<=$size;$i++ ){
					$counter = $i;
					for($j = 1; $j <= $i ; $j ++ ){
						echo "* ";
					}
					echo "<br />";
				}
			}

		?>
		

	</body>
</html>

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
			$options=array('options'=>array('default'=>5, 'min_range'=>2, 'max_range'=>30));
			$size = filter_input(INPUT_GET,'size', FILTER_VALIDATE_INT,['options'] );
			$black = "B";
			$white = "W";
			for ($i=1; $i<=$size; $i++){
				if($i % 2 == 0){
					for($j=1; $j<= $size; $j++){
						if($j % 2 == 0 ){echo "W ";}
						else{echo "B ";}
						}
					}
				else{
					for($j=1; $j<= $size; $j++){
						if($j % 2 == 0 ){echo "B ";}
						else{echo "W ";}
						}
					}
					echo "<br /n>";
				}

		?>
		

	</body>
</html>

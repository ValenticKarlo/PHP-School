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
			// if ( isset( $_GET["size"] ) ) {
			// 	$size = intval($_GET["size"]);
			// }
			if($_GET != NULL){
				$size = intval($_GET["size"]);
			}
			else{$size = 3;}
			
			echo "<pre>";
			for($i=1; $i<=$size ; $i++){
				if($i == 1 || $i == $size ){
					for($j=1;$j<=$size;$j++){
						echo "#";
						}
					}			
				else{
					for($j=1; $j <= $size; $j++){
						if($j == 1 || $j == $size){
							echo "#";
						}
						else {echo "&nbsp";}
					}
				};
				echo "<br /n>";
			}
		?>
		

	</body>
</html>

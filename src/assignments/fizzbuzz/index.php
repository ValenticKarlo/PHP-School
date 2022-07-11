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
			$num = 1;
			for($num; $num <= 100; $num ++){
				if($num % 3 == 0){echo "Fizz  ";}
				else if($num % 5 == 0 && $num % 3 != 0){echo "buzz  ";}
				else {echo $num . " ";}
			}
		?>
		

	</body>
</html>

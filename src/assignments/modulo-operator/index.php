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
			$fiveDigNum = intval(htmlspecialchars($_GET("num")));
			$digit1 = (int) ( ( 12345 % 10 ) / 10 );
			$digit2 = (int) ( ( 12345 % 100 ) / 10 );
			$digit3 = (int) ( ( 12345 % 1000 ) / 10 );
			$digit4 = (int) ( ( 12345 % 10000 ) / 10 );
			$digit5 = (int) ( ( 12345 % 100000 ) / 10 );
			
		?>

	</body>
</html>

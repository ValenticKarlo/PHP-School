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
			$year = intval($_GET["year"]);
			if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0 )){
				echo $year . " is a leap year.";
			}
			else {echo $year . " is not leap year. ";}
		?>
		

	</body>
</html>

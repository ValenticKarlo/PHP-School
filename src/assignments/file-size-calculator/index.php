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
			$inBytes = floatval($_GET["bytes"]);

		?>
		<table class="table table-striped" style="width: 500px;">
			<tr>
				<td colspan="2">Bytes: <?$inBytes = floatval($_GET["bytes"]); echo $inBytes;?> </td>
			</tr>
			<tr>
				<td>kilobytes (KB): <?php echo number_format($inBytes/pow(10,3),2,'.',''); ?></td>
				<td>kibibytes (KiB): <?php echo number_format($inBytes/pow(2,10),2,'.',''); ?></td>
			</tr>
			<tr>
				<td>megabytes (MB): <?php echo number_format($inBytes/pow(10,6),2,'.',''); ?></td>
				<td>mebibytes (MiB): <?php echo number_format($inBytes/pow(2,20),2,'.',''); ?></td>
			</tr>
			<tr>
				<td>gigabytes (GB): <?php echo number_format($inBytes/pow(10,9),2,'.',''); ?></td>
				<td>gibibytes (GiB): <?php echo number_format($inBytes/pow(2,30),2,'.',''); ?></td>
			</tr>
		</table>
		

	</body>
</html>

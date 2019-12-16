<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		.buttonsmall {
			padding:1px 1px;
			background:#ccc;
			font-size: 0;
			border:0 none;
			cursor:pointer;
		}
		.td {
			height: 1px;
			width: 1px;
		}
		th, td {
			border: 1px solid black;
			margin: 0;
			padding: 0;
			border-collapse: collapse;
			border-spacing: 0;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}
		.cell {
			width: 10px;
			height: 10px;
		}
	</style>
	<link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<title>Warhammer</title>
</head>
<body>

		<table border="1">
			<?php
				for ($i = 0; $i < 100; $i++)
				{
				  	echo ('<tr id=' . $i .'>');
				  	for ($j = 0; $j < 150; $j++)
				  		echo ('<td>' .
							'<form id="form-id" method="get" action="your-php-file-url">
<input type="hidden" name="your-variable-name" value="your-variable-value">
<div class="cell" onclick="document.getElementById(\'form-id\').submit();"></div>
</form>' .
							'</td>' .'</td>');
				  	echo ('</tr>');
				}
			?>
		</table>
</body>
</html>

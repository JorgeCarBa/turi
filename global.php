<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>f</title>
</head>
<body>
	<?php
		
		$x = 5;
		$y = 10;

		function myTestGlobal() {
			global $x, $y;
			$y = $x + $y;
		}

		myTestGlobal();
		echo $y; // output 15
		echo '<br />';


		function mytestStatic() {
			static $x= 0;
			echo $x;
			echo '<br />';
			$x++;
		}

		mytestStatic();
		mytestStatic();
		mytestStatic();
	?>
</body>
</html>
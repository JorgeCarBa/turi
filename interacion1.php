<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jaja</title>
</head>
//Esto es un comentario para hacer el PullRequest
<body>	
	<?php 

		$n1 = $_GET["num1"];
		$n2 = $_GET["num2"];

		echo '<h1> Suma de dos numeros </h1>';

		echo "el numero uno es: ".$_GET["num1"];
		echo '<br />';
		echo "el numero dos es: ".$_GET["num2"];
		echo '<br />';

		$suma=$n1+$n2;
		echo "el resultado de la suma es :".$suma;


	?>

</body>
</html>
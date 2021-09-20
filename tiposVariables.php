<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>basicos</title>
</head>
<body>
	<h1>tipos basicos</h1>
	<?php
		$un_bool = FALSE;
		$una_cadena = "textos";
		$un_entero = 12;
		$un_real = 3.1415;

		echo "con un var_dump : <BR/ > <BR />";
		echo var_dump ($un_bool);
		echo "<BR />";
		echo var_dump ($una_cadena);
		echo "<BR />";
		echo var_dump ($un_entero);
		echo "<BR />";
		echo var_dump ($un_real);
		echo "<BR /> <BR />";

		echo "<BR />";
		echo gettype ($un_bool);
		echo "<BR />";
		echo gettype ($una_cadena);
		echo "<BR />";
		echo gettype ($un_entero);
		echo "<BR />";
		echo gettype ($un_real);
		echo "<BR /> <BR />";

		if (is_bool ($un_bool)) {
			echo 'es un booleano<BR/';
		}else{
			echo 'no es un booleano <BR/ >';
		}
		if (is_bool ($una_cadena)) {
			echo 'es un booleano<BR/';
		}else{
			echo 'no es un booleano <BR/ >';
		}
		if (is_bool ($un_entero)) {
			echo 'es un booleano<BR/';
		}else{
			echo'no es un booleano <BR/ >';
		}
		if (is_bool ($un_real)) {
			echo 'es un booleano<BR/';
		}else{
			echo'no es un booleano <BR/ >';
		}

	?>
</body>
</html>
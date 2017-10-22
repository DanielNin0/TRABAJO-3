<html>
<head>
	<title>EJERCICIO 5</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="fondo">
	<h1>PROGRAMACION DE APLICACIONES WEB</h1>
	<H4>Mostar en pantalla cual es el mayor de TRES numeros</H4>
	<div class="centrado">
	<?php
		$n1=54;
		$n2=10;
		$n3=36;
		echo "NUMERO 1:  ".$n1."<br>";
		echo "NUMERO 2:  ".$n2."<br>";
		echo "NUMERO 3:  ".$n3."<br>";

		if ($n1>$n2&&$n1>$n3) {
			echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.") y que el tercero (".$n3.")";
		}
		elseif($n2>$n3&&$n2>$n1) {
			echo "El segundo numero (".$n2.") es mayor que el tercero (".$n3.") y que el primero (".$n1.")";
		}
		elseif($n3>$n2&&$n3>$n1) {
			echo "El tercer numero (".$n3.") es mayor que el segundo (".$n2.") y que el primero (".$n1.")";
		}
		else{
			echo "El primer numero (".$n1.") es igual que el segundo (".$n2.") y que el tercero (".$n3.")";
		}
	?>
</div>
	<footer>
	<p>Nombre del alumno:HECTOR DANIEL NIÑO NIETO</p>
	<a href="index.php">Regresar al menu</a>
</footer>

</body>
</html>
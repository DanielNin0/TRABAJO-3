<html>
<head>
	<title>EJERCICIO 4</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="fondo">
	<h1>PROGRAMACION DE APLICACIONES WEB</h1>
	<H4>Mostrar en pantalla cual es el mayor de dos numeros</H4>
	<div class="centrado">
	<?php
		$n1=54;
		$n2=10;
		echo "NUMERO 1:  ".$n1."<br>";
		echo "NUMERO 2:  ".$n1."<br>";

		if($n1>$n2){
			echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.")";
		}
		elseif ($n1==$n2) {
			echo "El primer numero (".$n1.") es igual que el segundo (".$n2.")";
		}
		else{
			echo "El primer numero (".$n1.") es menor que el segundo (".$n2.")";
		}
	?>
</div>
	<footer>
	<p>Nombre del alumno:HECTOR DANIEL NIÑO NIETO</p>
	<a href="index.php">Regresar al menu</a>
</footer>

</body>
</html>
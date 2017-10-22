
<html>
<head>
	<title>EJERCICIO 1</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="fondo">
	<h1>PROGRAMACION DE APLICACIONES WEB</h1>
	<h4>Hacer un programa que sume, reste, multiplique y divida dos variables</h4>
	<div class="centrado">
		<img src="img/calculo.png" class="user">
		<br>
	<?php
	
		$numero1=10;
		$numero2=12;
		//suma
		$suma=$numero1+$numero2;
		echo "$numero1+$numero2"."<br>";
		echo "suma = ".$suma."<br>";
		//resta
		$resta=$numero1-$numero2;
		echo "$numero1-$numero2"."<br>";
		echo "resta = ".$resta."<br>";
		//multiplicar
		$multiplicar=$numero1*$numero2;
		echo "$numero1*$numero2"."<br>";
		echo "multiplicacion = ".$multiplicar."<br>";
		//dividir
		$dividir=$numero1/$numero2;
		echo "$numero1/$numero2"."<br>";
		echo "divicion = ".$dividir."<br>";
		
	?>
</div>
	<footer>
	<p>Nombre del alumno:HECTOR DANIEL NIÑO NIETO</p>
	<a href="index.php">Regresar al menu</a>
</footer>
</body>
</html>
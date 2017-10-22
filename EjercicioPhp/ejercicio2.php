<html>
<head>
	<title>EJERCICIO 2</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="fondo">
	<H1>PROGRAMACION DE APLICACIONES WEB</H1>
	<H4>Mostrar en pantalla una tabla de 10 por 10 con los numeros del 1 al 100</H4>
	<div class="centrado">
	<?php

		echo "<table border=1>"; 
		$n=1;
	for ($n1=1; $n1<=10; $n1++)
	{
  		echo "<tr>"; 
 		for ($n2=1; $n2<=10; $n2++)
		{
 			echo "<td>", $n, "</td>"; 
 			$n=$n+1;
 		}
		echo "</tr>";
	}
		echo "</table>";
	?>
</div>
	<footer>
	<p>Nombre del alumno:HECTOR DANIEL NIÑO NIETO</p>
	<a href="index.php">Regresar al menu</a>
</footer>
</body>
</html>
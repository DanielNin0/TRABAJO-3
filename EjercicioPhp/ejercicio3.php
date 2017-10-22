<html>
<head>
	<title>EJERCICIO 3</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="fondo">
	<h1>PROGRAMACION DE APLICACIONES WEB</h1>
	<H4>Mostrar en pantalla una tabla de 1 por 10</H4>
	<div class="centrado">
	<?php

    echo "<h2>BUCLE WHILE</h2><BR>";
    echo "<table border=1>";
	$ciclo=0;
	while ($ciclo< 10) {
	echo"<tr>";
	echo "<td>","Linea ".$ciclo,"</td>"; 
	echo"</tr>";
		$ciclo=$ciclo+1;
    }
    echo"</table>"
	?>
</div>
	<footer>
	<p>Nombre del alumno:HECTOR DANIEL NIÑO NIETO</p>
	<a href="index.php">Regresar al menu</a>
</footer>
</body>
</html>
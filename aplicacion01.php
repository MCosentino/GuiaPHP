<html>
<head>
	<title>Aplicacion 01</title>
</head>
<body>
	<?php 
	$numero = 1;
	$suma = 0;
	echo "Numeros sumados: <br>";
	while ($suma <= 1000) {
		echo "$numero <br>";
		$suma = $suma + $numero;
		$numero++;
	}
	$numero--;
	echo "Cantidad de numeros sumados: $numero <br>";
	 ?>
</body>
</html>
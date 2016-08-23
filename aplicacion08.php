<html>
<head>
	<title>Aplicacion 08</title>
</head>
<body>
	<?php  
	//$v = array(1 => 90, 30 => 7, 'e' => 99, 'hola' => "mundo");
	$v[1] = 90;
	$v[30] = 7;
	$v['e'] = 99;
	$v['hola'] = 'mundo';

	foreach ($v as $dato => $valor) {
		echo $dato.": ".$valor;
		echo "<br>";
	}

	?>
</body>
</html>
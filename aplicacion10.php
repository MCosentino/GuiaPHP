<html>
<head>
	<title>Aplicacion 10</title>
</head>
<body>
	<?php
	$lapicera1 = array('color' => 'azul', 'marca' => 'Faber Castel','trazo' => 'grueso', 'precio' => 15);
	$lapicera2 = array('color' => 'rojo', 'marca' => 'Micro','trazo' => 'intermedio', 'precio' => 10);
	$lapicera3 = array('color' => 'amarillo', 'marca' => 'Sharpie','trazo' => 'fino', 'precio' => 20);
	
	$ListaLapiceras = array($lapicera1,$lapicera2,$lapicera3);

	foreach ($ListaLapiceras as $Lapicera) {
		echo "Color: ".$Lapicera['color']." Marca: ".$Lapicera['marca']." Trazo: ".$Lapicera['trazo']." Precio: ".$Lapicera['precio']."<br>";
	}
	?>
</body>
</html>
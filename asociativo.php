<!DOCTYPE html>
<html lang="en">

	<?php
		// codigo PHP
		$asociativo = array(123, "123", true, 12.3);
	?>

	<head>
		<meta charset="UTF-8">
		<title>Primeros Paso con Php</title>
	</head>
	<body>
		<center> PRIMEROS PASOS CON PHP </center>

		<?php 
			$num = count($asociativo);
			echo "numero de elementos : ".$num;
		?>

	</body>
</html>
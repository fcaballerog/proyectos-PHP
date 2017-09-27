<!DOCTYPE html>
<html lang="en">
	<?php
		//codigo PHP
		$asociativo = array(123, "123", true, 12.3);
		$persona = array("nif"=>"45623891J", "nombre"=>"Pedro", "peso"=>76);
	?>
	<head>
		<meta charset="UTF-8">
		<title>Primeros Paso con Php</title>
	</head>
	<body>
		<center> PRIMEROS PASOS CON PHP </center>
		<?php 
			/*
			$num = count($asociativo);
			echo "numero de elementos: ".$num;
			*/

			/*
			foreach($persona as $clave=>$valor)
    			echo $clave." => " . $valor."<br>";
    		*/

    		/*
    		while (list($clave, $valor) = each($persona))
				echo $clave." => " . $valor."<br>";
			*/

			// var_dump($persona);

			// echo "<br><br><br><br>";

			// print_r($persona);

			/*
			foreach($_SERVER as $clave=>$valor)
    			echo $clave." => " . $valor."<br>";
			*/

    		/*
    		echo "<br><br><br><br>";

    		while (list($clave, $valor) = each($_SERVER))
				echo $clave." => " . $valor."<br>";
			*/

			print_r($persona["nif"]);

			echo "<br>";

			while (list($clave, $valor) = each($persona))
				echo ($persona[$clave])."<br>";

			echo "<br>";

			while (list($clave, $valor) = each($persona))
				echo ($persona[$clave])." => " . "<br>";

		?>
	</body>
</html>
<!DOCTYPE html>
	<html lang="en">

		<?php
			//codigo PHP
			//$eshop = array( array("Las Palmas","$100",7), array("Fuerteventura","$300",10), array("Lanzarote","$1000",5) );
		?>

	<head>
		<meta charset="UTF-8">
		<title>Matriz Bidimensional</title>
	</head>
	<body>
		<center> PRIMEROS PASOS CON PHP  - Matriz Bidimensional</center>

		<?php 
			
			$Islas = array(
                array("Gran Canaria","100","200", "300","100","200", "300","100","200", "300","100","200", "300"),
                array("Fuerteventura","300","1000", "400","300","100", "400","300","100", "400","300","100", "400"),
                array("Lanzarote","100","500", "600","100","500", "600","100","500", "600","100","500", "600"),
                array("Tenerife","100","200", "300","100","200", "300","100","200", "300","100","200", "300"),
                array("La Gomera","300","100", "400","300","100", "400","300","100", "400","300","100", "600"),
                array("La Palma","100","500", "600","100","500", "600","100","500", "600","100","500", "600"),
                array("El Hierro","100","500", "600","100","500", "600","100","500", "600","100","500", "600")
              );
 
			echo "<table>";
				echo "<tr>";
				echo "<th>Islas</th>
									<th>Enero</th> <th>Febrero</th> <th>Marzo</th> 
									<th>Abril</th> <th>Mayo</th> <th>Junio</th> 
									<th>Julio</th> <th>Agosto</th> <th>Septiembre</th> 
									<th>Octubre</th> <th>Noviembre</th> <th>Diciembre</th>";

				echo "</tr>";

				foreach($Islas as $filas){
					echo "<tr>";
				 	foreach($filas as $columnas){
				  		echo "<td>".$columnas."</td>";
				 	}
				 	echo "</tr>";
				}
			echo "</table>";

			echo "el Resultado de la coordenada 1, 2 es: ".$Islas[1][2];

		?>
	
	</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<?php

		$clubs = array(
			array("nombre" => "Real Madrid","jugadores" => 
			array("1" =>"Casillas","18"=>"Albiol","12" =>"Marcelo","3" =>"Pepe","4" =>"Sergio Ramos","22" =>"Di Maria","6"=>"Khedira","14" =>"Xabi Alonso")),
 			array("nombre" => "Barcelona FC","jugadores" => 
 			array("1" => "Valdés", "18" => "Jordi Alba","10" =>"Messi","4" =>"Cesc Fábregas","17" =>"Pedro","3" => "Piqué", "16" => "Sergi Busquets")),
 			array("nombre" => "Atlético de Madrid","jugadores" => 
 			array("1"=>"Sergio Asenjo","3" =>"Filipe Luis","20" =>"Juanfran","17" =>"Silvio","21" =>"Emre","14" =>"Gabi","6" =>"Koke","9" =>"Falcao")));

	?>


	<form>

		<select name="clubs">
			echo " <option value=\"""\">".$nombre[1]."</option>\n"; 

	   		<option value="1">a</option> 
	   		<option value="2">b</option> 
	   		<option value="3">c</option>
	   		<option value="4">d</option> 
	   		<option value="5">e</option> 
	   		<option value="6">f</option> 
		</select>
	</form>
	
</body>
</html>
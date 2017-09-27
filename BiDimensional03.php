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
        $meses = array("ENERO", "FEBRERO", "MARZO", "ABRIL","MAYO","JUNIO","JULIO", "AGOSTO","SETIEMBRE", "OCTUBRE","NOVIEMBRE", "DICIEMBRE");
        $islas = array("Gran Canaria","Lanzarote", "Fuerteventura","Tenerife","La Palma","Gomera" ,"El Hierro");
        
        $visitantesCanarias = array(
             array(10,12,13,11,10,15,12,11,9,14,12,11),
             array(10,12,13,11,10,15,12,11,9,14,12,11),
             array(10,12,13,11,10,15,12,11,9,14,12,11),
             array(10,12,13,11,10,15,12,11,9,14,12,11),
             array(10,12,13,11,10,15,12,11,9,14,12,11),
             array(10,12,13,11,10,15,12,11,9,14,12,11),
             array(10,12,13,11,10,15,12,11,9,14,12,11)
        );

        function visitantesMeses($mes){
          global $visitantesCanarias;
          $acumulado=0;

          for ($i=0; $i< count($visitantesCanarias);$i++)
          {

            $acumulado+=$visitantesCanarias[$i][$mes];
            echo $visitantesCanarias[$i][$mes]."<br>";
              
          }
          return $acumulado;
        }
        
        $mes=2; // Marzo
        echo "La suma de visitantes al mes de ". $meses[$mes]. " = ". visitantesMeses($mes);
    ?>
  
  </body>
</html>
<?php
error_reporting(E_ALL);
ini_set("error_reporting", 1);
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Adivina un número generado al azar</title>
</head>

<body>
<center>ADIVINA EL NUMERO GENERADO AL AZAR</CENTER>
<FORM method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?> ">
    <?php
    $buttonName = "probar";

    if (isset($_POST['enviar'])) // manda número
    {
        if ($_POST['numero'] == $_SESSION['numeroAdivinar'])
            $mensaje = "ACIERTO";

        if ($mensaje == 'ACIERTO') {
            $buttonName = "nueva partida";
            $newNumber = "Se ha generado un nuevo numerito!";
            session_destroy();
        } else
            if ($_POST['numero'] < $_SESSION['numeroAdivinar'])
                $mensaje = "MAYOR";
            else
                $mensaje = "MENOR";
        $_SESSION['partida'][] = array("num" => $_POST['numero'], "mensaje" => $mensaje);
    }

    ?>
    NUMERO : <INPUT TYPE="TEXT" size="3" NAME="numero"/>
    <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="<?php echo $buttonName; ?>"/>
    <?php echo $newNumber; ?>
</FORM>
<br/><br/>
<?php
function generarNumero()
{
    $numero = mt_rand(1, 100); // función para calcular un número aleatorio ...
    return $numero;
}

if (!isset($_SESSION['numeroAdivinar']))
    $_SESSION['numeroAdivinar'] = generarNumero();

if (!isset($_SESSION['partida'])) {
    $_SESSION['partida'] = array();
} else
    $i = 1;
echo "<table width='40%'><th>Jugada</th><th>N&uacute;mero ensayado</th><th>Respuesta del servidor</th>";
foreach ($_SESSION['partida'] as $jugada) {
    echo "<tr><td align='center'>" . $i . "</td><td align='center'>" . $jugada["num"] . "</td><td align='center'>" . $jugada["mensaje"] . "</td></tr>";
    $i++;
}
echo "</table>";

?>

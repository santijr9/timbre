<?php

include 'functions.php';

    cabecera();


echo "<h3>Hora dispositiu: ".date('h:i:s A')."</h3>";
?>

<h3>Hora del teu ordinador: &nbsp; <span id='ct' ></span></h3>


<h3>Canvi de segons</h3>

<?php

$segundos=$_GET['segundos'];

//echo $segundos;

$myFile="tiempo";
unlink($myFile) or die("No se ha podido cambiar el num de segundos");

$handle = fopen($myFile, 'w') or die('Cannot open file:  '.$myFile);

fwrite($handle, $segundos);

echo "El canvi s'ha fet correctament";


?>
<br>




   <?php


    fin();

    ?>

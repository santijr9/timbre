<?php

include 'functions.php';
    
    cabecera();

echo "<h3>";

echo "Esborrant fitxers CSV<br>";

//$file=$_GET['fichero'];
//falta el get
//$file="inicial.csv";


$output=1;
    
//echo "optimo.sh files/$file ";

$output = shell_exec("rm solucion.csv files/* ");

if($output == 0) {echo "Els fitxers s'han esborrat correctament.<br><br>";
                 
                 
                 
                 }

else echo "algo no ha anat bé";


echo "</h3>";

fin();

?>
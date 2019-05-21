<?php

include 'functions.php';
    cabecera();
?>

<h3>Hora del dispositiu: &nbsp; <span id='ct' ></span></h3>
<hr>

<h3>Has seleccionat la cançó:</h3>

<?php
$new_song=$_GET['song'];

//borramos el enlace a la cancion actuals
$file = "selected/selected.mp3";
if (!unlink($file))
  {
  echo ("Error Canviant la cançó seleccionada $file");
  }
else
  {
  echo ("Fent el canvi...");
  }



$target="../songs/$new_song";
$link="selected/selected.mp3";
//hacemos el nuevo enlace
symlink($target,$link);




echo $new_song;




 ?>







   <?php


    fin();

    ?>

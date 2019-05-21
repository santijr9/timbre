<?php

include 'functions.php';

    cabecera();


echo "<h3>Hora dispositiu: ".date('h:i:s A')."</h3>";
?>
<script>

function barraIn(){
        document.getElementById("barra").style.visibility = "visible";
}

function validarNum(){
	var x = document.forms["formsegundos"]["submit1"].value;
	//alert("aaa "+x);
	if((isNaN(x))||(x>60)||(x<5)){
	alert("Error, introdueix un número entre 5 i 60. Has introduit: "+x);
	return false;
	}
	else{
	//alert("ok: "+x);
	return true;
	}

}
</script>

<img src="bar2.gif" id="barra"></img>

<h3>Hora del teu ordinador: &nbsp; <span id='ct' ></span></h3>


<h3>Cançó seleccionada per sonar:</h3>

<?php

  // ----- CANCION SELECCIONADA
if ($handle = opendir('selected')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          // echo "$entry<br>";
              echo readlink("./selected/$entry");
        }
    }
    closedir($handle);
}


$fichero = 'tiempo';
$segundos=file_get_contents($fichero);


?>
&nbsp;&nbsp;<a href="reproduce.php" ><input type="button" onclick="barraIn()" value="Reprodueix"></a>
<br>



<form name="formsegundos" onsubmit="return validarNum()" action="cambiar_segundos.php">
<input id="submit1" size="1" type="number" name="segundos" value="<?=$segundos?>"> Segons
<input type="submit" value="Canviar">
</form>



<hr>
<br>
<h3>Llistat de cançons actuals (Clicka per seleccionar-la)</h3>
<?php
  // ----- LISTA CANCIONES
if ($handle = opendir('songs')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='selecciona.php?song=$entry'>$entry</a><br>";
        }
    }
    closedir($handle);
}



  // ----- Upload new song
 ?>
<br><br>
<h3>Upload new music file: (mp3,aac...)</h3>
<form action="subir.php" method="post" enctype="multipart/form-data">
      <input type="submit" value="Upload File" name="submit">
</form>






   <?php


    fin();

    ?>

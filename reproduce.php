<?php

include 'functions.php';

    cabecera();



?>



<h3>Hora del dispositiu: &nbsp; <span id='ct' ></span></h3>
<hr>

<h3>Reproduint cançó:</h3>

   <?php
	echo "reproduciendo sonido...";
    $output = shell_exec("./player.sh /var/www/html/selected/selected");
    echo $output;

    
    fin();

    ?>

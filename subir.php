<?php

include 'functions.php';

    cabecera();



?>





<h3>Upload new music file: (mp3,aac...)</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Upload File" name="submit">

</form>






   <?php


    fin();

    ?>

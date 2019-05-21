<?php

include 'functions.php';

    cabecera();
?>
<h3>
<?php


$target_dir = "songs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

//echo $target_file;

$target_file_2 = str_replace(' ', '', $target_file);

//echo $target_file_2;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




// Check if file already exists
if (file_exists($target_file)) {
    echo "Ho sentim, el fitxer ja existeix.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    echo "El fitxer que vols pujar es massa gran.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp3" && $imageFileType != "acc"  ) {
    echo "Ho sentim, només podem reproduir fitxers .mp3 i .acc";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Ha hagut un error i el fitxer no ha pujat.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file_2)) {
        echo "El fitxer ". basename( $_FILES["fileToUpload"]["name"]). " ha pujat correctament.";
    } else {
        echo "Ho sentimr, el fitxer no s'ha pujat correctament.";
    }
}

  echo "</h3><br>
  <img height='60%' width='60%' id='barra' src='bar4.gif'/>";





    fin();

    ?>

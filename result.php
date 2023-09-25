<?php

$paragraph = $_GET["paragraph"];
$array = explode(" ", $paragraph);
$lunghezza = count($array);
$parola_da_censurare = $_GET["parola-da-censurare"];
$paragrafo_censurato = str_replace($parola_da_censurare, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> 
        <h1>Paragrafo</h1>
        
        <?php
         echo $paragraph;
         
         ?>
        lunghezza:<?php echo $lunghezza;?>
        <?php echo $paragrafo_censurato;?>

    </p>
</body>
</html>
<?php  
$text = $_GET['text'];
$censita = $_GET["censita"];
$text_lngt = strlen($text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <h2>Testo che hai inserito:</h2>
        <p> <?php
        echo $text;
        ?> </p>
        <h4>Il testo contiene <span> <?php echo $text_lngt; ?> </span> lettere.</h4>
        <hr>
        <h2>Testo censurato:</h2>
        <p> <?php
        echo $cens_text = str_replace($censita, '***', $text);
        ?> </p>
        <h4>Il testo censito contiene <span> <?php echo strlen($cens_text); ?> </span>lettere.</h4>
    </div>
</body>
</html>
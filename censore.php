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
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Testo che hai inserito:</h2>
    <?php
    echo $text;
    ?>
    <h3>Il testo contiene <?php echo $text_lngt; ?> parole.</h3>

    <h2>Testo censurato:</h2>
    <?php
    echo $cens_text = str_replace($censita, '***', $text);
    ?>
    <h3>Il testo censito contiene <?php echo strlen($cens_text); ?> parole.</h3>
</body>
</html>
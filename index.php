<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>CENSURATORE DI TESTI</h1>
    <h2>Inserisci il testo e la parola che vuoi che venga censurata</h2>

    <form action="censore.php" method="GET">
        <label for="text">Il tuo testo</label>
        <input type="text" id="text" name="text">

        <label for="censita">La parola da censurare</label>
        <input type="text" id="censita" name="censita">

        <button type="submit">Invia</button>
    </form>
</body>
</html>

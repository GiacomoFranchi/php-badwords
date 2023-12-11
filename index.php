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

    <form action="censita.php" method="GET">
        <label for="text">Tuo nome</label>
        <input type="text" id="text" name="text">

        <label for="censore">Tuo cognome</label>
        <input type="text" id="censore" name="censore">

        <button type="submit">Invia</button>
    </form>
</body>
</html>
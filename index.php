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
        <h1>CENSURATORE DI TESTI</h1>
        <h3>Inserisci il testo e la parola che vuoi che venga censurata</h2>

        <form action="censore.php" method="GET">
            <label for="text">Il tuo testo</label>
            <textarea id="text" name="text" rows="4" cols="50"> </textarea>

            <label for="censita">La parola da censurare</label>
            <input type="text" id="censita" name="censita">

            <button type="submit">Invia</button>
        </form>
    </div>
</body>
</html>

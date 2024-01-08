<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<form action="censword.php" method="GET">
        <label for="paragraph">Inserisci un paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

        <label for="badword">Inserisci la parola da censurare</label>
        <input type="text" id="badword" name="badword">

        <button type="submit">Invia</button>
    </form>
</body>
</html>
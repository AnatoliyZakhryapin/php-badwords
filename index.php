<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>
        Ciao PHP
    </h1>

    <form action="text.php" method="POST">
         <p>
            <label>Inserisci la parola</label>
        </p>
        <input type="text" name="replace_word">
        <p>
            <label>Inserisci il testo</label>
        </p>
        <textarea name="texarea" rows="4" cols="50"></textarea>
        <p>
           <input type="submit" value="Invia">
        </p>
        
    </form>

</body>
</html>
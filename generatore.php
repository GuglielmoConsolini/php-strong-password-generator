<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
<?php
       
        
        if (isset($_GET['length']) && is_numeric($_GET['length'])) {
            //RECUPERO LA LUNGHEZZA DELLA PSSWRD
            $length = intval($_GET['length']);
            
            // CREO LA STRINGA
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= 'X';
            }
            
            //STAMPO PASSWRD
            echo "<p>La tua password è: $password</p>";
        } else {
            echo "<p>Parametro 'length' non valido o mancante. Si prega di specificare una lunghezza valida.</p>";
        }
    ?>
    <a href="input.php">Torna indietro</a>
</body>
</html>
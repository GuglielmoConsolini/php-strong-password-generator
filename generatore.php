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
            
             //STRINGA DEI CARATTERI CONSENTITI
             $caratteri = 'abcdefghijklmnopqrstuvwxyz0123456789!?-+£$%=';
             $lunghezza = strlen($caratteri); //LUNGHEZZA DELLA STRINGA
             
             // GENERO PASSWORD CASUALE
             $password = '';
             for ($i = 0; $i < $length; $i++) {
                 //AD OGNI ITERAZIONE PRENDE UN INDICE CASUALE
                 $indiceCasuale = rand(0, $lunghezza - 1);
                 //AGGIUNGE IL CARATTERE ALLA PASSWORD
                 $password .= $caratteri[$indiceCasuale];
             }
             
             // STAMPO IN PAGINA
             echo "<p>La tua password è: $password</p>";
         } else {
             echo "<p>Parametro 'length' non valido o mancante. Si prega di specificare una lunghezza valida.</p>";
         }
    ?>
    <a href="input.php">Torna indietro</a>
</body>
</html>
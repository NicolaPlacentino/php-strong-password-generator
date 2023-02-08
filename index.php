<!-- Oggi creeremo una pagina in grado di generare una password per gli utenti.
L'utente potrà scegliere la lunghezza password e ricevere in un alert una password con il numero di caratteri casuali da lui richiesto!

Milestone 1: creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php
che includeremo poi nella pagina principale

Milestone 3: invece di visualizzare la password nella index, 
effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. -->

<?php 
$password_length = $_GET['password-length'];

include __DIR__ . '/includes/functions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicola Placentino">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body class="vh-100">
    <div class="bg-dark text-white text-center h-100 p-5">
        <h1 class="mb-5">Password Generator</h1>

        <?php if(!empty($password_length)) : ?>
            <div class="alert alert-info mx-auto w-25" role="alert">
            La tua password è: <b><?= getPassword($password_length)?></b>
            </div>
        <?php endif; ?>
        <?php if(empty($password_length)) : ?>
            <div class="alert alert-danger mx-auto w-25" role="alert">
            Devi inserire almeno un numero
            </div>
        <?php endif; ?>

        <div class="m-5">
            <form action="" class="input-group" method="GET">
                <input type="number" class="form-control" min="1" max="15" name="password-length" placeholder="Quanti caratteri deve essere lunga la password?">
                <button type="submit" class="btn btn-primary" type="button">Invia</button>
                <button type="reset" class="btn btn-outline-secondary" type="button">Reset</button>
            </form>
        </div>
        
    </div>
</body>
</html>
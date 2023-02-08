<?php 
session_start();
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

        <div class="alert alert-info mx-auto w-25" role="alert">
        La tua password è: <b><?= $_SESSION['final-password'] ?></b>
        </div>
    </div>
</body>
</html>
<?php 

$length = $_GET['length'] ?? null;


if($length != null){

    include './partials/functions.php';
    

} 

    
    ?>
    
    








<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>

<h1>Inserisci la lunghezza della password da generare</h1>

<form action="index.php" method="GET">

<input name="length" type="number" min="1" max="10" placeholder="Inserisci un numero" required>
<button type="submit">Invia</button>


   <?php 
    
    if($length == null){

    } else {

        ?> 
        <div> Lunghezza scelta : <?php echo $length ?> </div>
        
        <div> Password generata : <?php echo createPassword() ?></div>
        <?php

        
    }
    
    ?>
    


    

</form>
    
</body>
</html>
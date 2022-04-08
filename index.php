<?php

    // Includo file index.php
    require_once __DIR__ . "./movie.php";

    
    $projectX = new Movie(
        "Project X",
        "Una festa che spacca",
        "Italian", 
        "5", 
        "Tre liceali vogliono organizzare una festa di compleanno memorabile che innalzi la loro scarsissima popolarità presso i compagni di scuola e attirare ragazze.",
        2012, 
    );

    $suxBad = new Movie(
        "Suxbad",
        "Tre menti sopra il pelo",
        "Italian", 
        "4.3", 
        "L'ansia di separazione è un problema serio per due compagni di scuola che bramano bevute storiche e ragazze disponibili.",
        2007, 
    );
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Css -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Php-oop-1</title>
</head>
<body>

    <!-- Movie wrapper -->
    <div class="movies_wrapper">

        <!-- Movie -->
        <div class="movie">
            <!-- Titolo -->
            <h1 class="title"><?php echo  $projectX->getFullTitle() ?></h1>
            <p class="description"><?php echo $projectX->description ?></p>
            <p class="language"><?php echo $projectX->language ?></p>
            <p class="vote"><?php echo $projectX->vote ?></p>
        </div>

       <!-- Movie -->
       <div class="movie">
            <!-- Titolo -->
            <h1 class="title"><?php echo $suxBad->getFullTitle() ?></h1>
            <p class="description"><?php echo $suxBad->description ?></p>
            <p class="language"><?php echo $suxBad->language ?></p>
            <p class="vote"><?php echo $suxBad->vote ?></p>
        </div>

    </div>
</body>
</html>
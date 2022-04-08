<?php

    // Includo file index.php
    require_once __DIR__ . "./movie.php";

    
    $projectX = new Movie(
        "./img/projectX.jpg",
        "Project X",
        "Una festa che spacca",
        "Italian", 
        "5", 
        "Tre liceali vogliono organizzare una festa di compleanno memorabile che innalzi la loro scarsissima popolarità presso i compagni di scuola e attirare ragazze.",
        2012, 
    );

    $suxBad = new Movie(
        "./img/suxBad.jpg",
        "Suxbad",
        "Tre menti sopra il pelo",
        "Italian", 
        "4.3", 
        "L'ansia di separazione è un problema serio per due compagni di scuola che bramano bevute storiche e ragazze disponibili.",
        2007, 
    );

    $kongSkullIlsand = new Movie(
        "./img/kong_Skull_Island.jpg",
        "kong",
        "Skull Island",
        "Italian",
        4.2,
        "Scienziati, soldati e avventurieri intraprendono una spedizione su un'isola inesplorata nell'Oceano Pacifico. Qui incontrano il potente Kong e altre creature mostruose, iniziando così una guerra tra di loro.",
        2017
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
            <!-- Wrapper img -->
            <div class="wrapper_img">
                <img src="<?php echo $projectX->cover ?>" alt="">
            </div>

            <!-- Wrapper description -->
            <div class="description">
                <h1 class="title"><?php echo $projectX->getFullTitle() ?></h1>
                <p class="description"><?php echo $projectX->description ?></p>
                <p class="language"><?php echo $projectX->language ?></p>
                <p class="vote"><?php echo $projectX->vote ?></p>
            </div>
        </div>

       <!-- Movie -->
       <div class="movie">
            <!-- Wrapper img -->
            <div class="wrapper_img">
                <img src="<?php echo $suxBad->cover ?>" alt="">
            </div>

            <!-- Wrapper description -->
            <div class="description">
                <h1 class="title"><?php echo $suxBad->getFullTitle() ?></h1>
                <p class="description"><?php echo $suxBad->description ?></p>
                <p class="language"><?php echo $suxBad->language ?></p>
                <p class="vote"><?php echo $suxBad->vote ?></p>
            </div>
        </div>

       <!-- Movie -->
       <div class="movie">
            <!-- Wrapper img -->
            <div class="wrapper_img">
                <img src="<?php echo $kongSkullIlsand->cover ?>" alt="">
            </div>

            <!-- Wrapper description -->
            <div class="description">
                <h1 class="title"><?php echo $kongSkullIlsand->getFullTitle() ?></h1>
                <p class="description"><?php echo $kongSkullIlsand->description ?></p>
                <p class="language"><?php echo $kongSkullIlsand->language ?></p>
                <p class="vote"><?php echo $kongSkullIlsand->vote ?></p>
            </div>
        </div>

    </div>
</body>
</html>
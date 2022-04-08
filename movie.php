<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all’interno della classe sono dichiarate delle variabili d’istanza
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’
stampate a schermo i valori delle relative proprietà di ogni oggetto (potete creare un array con dentro le due istanze e fare un ciclo per stampare i dati) -->

<?php

    // Classe movie
    class Movie {

        // Titolo
        public $title;

        // Subtitle
        public $subtitle;

        // Lingua film
        public $language;

        // Voto
        public $vote;

        // Descrizione
        public $description;

        // Anno uscita
        public $data_uscita;

        // Funzione constructor
        public function __construct(string $_title, string $_subtitle, string $_language, int $_vote, string $_description, int $_data_uscita)
        {
            $this->title = $_title;
            $this->subtitle = $_subtitle;
            $this->language = $_language;
            $this->vote = $_vote;
            $this->description = $_description;
            $this->data_uscita = $_data_uscita;
        }


        // funzione che ritorna il titolo e sottotitlo completo
        public function getFullTitle() {
            return $this->title . '<br>' . $this->subtitle;
        }
    };

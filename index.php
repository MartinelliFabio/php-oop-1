<?php

include_once __DIR__ . './Models/Movie.php';

$pulp = new Movie("Pulp Fiction", "Quentin Tarantino", "Azione", 70);
var_dump($pulp);

$kill = new Movie("Kill Bill Vol.1", "Quentin Tarantino", "Azione", 120);
var_dump($kill);

echo "Nome film: " . "<strong>$pulp->titolo</strong>" . "<br>" . " Diretto da: " . "<strong>$pulp->regista</strong>" . "<br>" . "Genere: " . "<strong>$pulp->genere</strong>" . "<br>" . "Minuti del film: " . "<strong>$pulp->minuti</strong>" . "<br>" . "Durata: " . "<strong>$pulp->durata</strong>" . "<br>" . "<br>";
echo "Nome film: " . "<strong>$kill->titolo</strong>" . "<br>" . " Diretto da: " . "<strong>$kill->regista</strong>" . "<br>" . "Genere: " . "<strong>$kill->genere</strong>" . "<br>" . "Minuti del film: " . "<strong>$kill->minuti</strong>" . "<br>" . "Durata: " . "<strong>$kill->durata</strong>";


?>
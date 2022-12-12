<?php
  class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $minuti;
    public $durata;
    

    function __construct(String $_titolo, String $_regista, String $_genere, Int $_minuti) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->genere = $_genere;
        $this->minuti = $_minuti;

        $this->setLenghtMovie();
    }

    public function setLenghtMovie() {
        if($this->minuti > 90) {
            $this->durata = "Lungo";
        } else {
            $this->durata = "Corto";
        }
    }
  }
?>
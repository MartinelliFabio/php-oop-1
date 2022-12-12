<?php
  class Movie {
    public $nome;
    public $autore;
    public $genere;
    

    function __construct($_nome, $_autore, $_genere) {
        $this->nome = $_nome;
        $this->autore = $_autore;
        $this->genere = $_genere;
    }
  }
?>
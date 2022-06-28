<?php 

class Prodotto {
    public $nome;
    public $prezzo;
    public $quantità;
    public $tipologia_animale;

    public function __construct($_nome, $_prezzo, $_quantità, $_tipologia_animale) 
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->quantità = $_quantità;
        $this->tipologia_animale = $_tipologia_animale;
    }
}
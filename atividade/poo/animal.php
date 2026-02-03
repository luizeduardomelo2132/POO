<?php

class Animal{
    public $nome;
    public $tipo; 
    public $especie;
    public $peso;
  
    function __construct(string $nome, string $tipo, string $especie, string $peso)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->especie = $especie;
        $this->peso = $peso;
    }

    function pular()
    {
        echo "{$this->nome} ta pulando\n";
    } 
}

$cachorro = new Animal("jo", "vira", "canius esp", "10kg");
$cachorro->pular();

$hiena = new Animal("salsicha", "lata", "hienus esp", "15kg");
$hiena->pular();

$taturana = new Animal("robson", "aranha", "aranha esp", "100g");
$taturana->pular();
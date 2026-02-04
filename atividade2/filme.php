<?php

class Filme{
    public $nome;
    public $data_publicacao; 
    public $custo;
    public $tempo;


    function __construct(string $nome, string $data_publicacao, string $custo, string $tempo)
    {
        $this->nome = $nome;
        $this->data_publicacao = $data_publicacao;
        $this->custo = $custo;
        $this->tempo = $tempo;
    }

    function passar(){ 
    echo "{$this->nome} esta passando no cinema\n";
    }
}

$silvio = new Filme("silvio", "22/12/2222", "300 milhoes", "2h");
$silvio->passar();

$chapeuzinho = new Filme("deu a louca na chapeuzinho", "30/04/1987", "10 milhoes", "1h 30m");
$chapeuzinho->passar();

$sev7en = new Filme("sev7en", "15/12/1995", "12 milhoes", "2h 7m");
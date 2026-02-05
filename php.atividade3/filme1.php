<?php

abstract class Cinema{
    public string $nome;
    private string $data_publicacao; 
    protected string $custo;
    public string $tempo;

    function __construct(string $nome, string $data_publicacao, string $custo, string $tempo){
        $this->nome = $nome;
        $this->data_publicacao = $data_publicacao;
        $this->custo = $custo;
        $this->tempo = $tempo;
    }
    abstract public function tipo(): string;

    public function passar(): void{
        echo("{$this->nome} esta passando no cinema");
    }
}


class Filme extends Cinema{
    public function tipo(): string{
        return ("suspense");
    }
}

$donie = new Filme("Donie Darko","12/02/2001","120 milhoes","1h 20m");
$donie->passar();
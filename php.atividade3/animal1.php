<?php

abstract class Vivo{
    public string $nome;
    private string $raca; 
    protected string $especie;
    public string $peso;


    function __construct(string $nome, string $raca, string $especie, string $peso){
        $this->nome =$nome;
        $this->raca =$raca;    
        $this->especie =$especie;
        $this->peso =$peso;
    }


    abstract public function tipo(): string;


    public function respirar(): void{
        echo("{$this->nome} esta respirando");
    }
}

class Animal extends Vivo{
    public function tipo(): string{
        return ("terrestre");
    }
}

$gato  = new Animal("eros","vira lata","felis","4kg");
$gato->respirar();
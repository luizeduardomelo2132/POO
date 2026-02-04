<?php

class Automovel{
    public $marca;
    public $num_porta;
    public $cor;
    public $tipo;

    function __construct(string $marca, int $num_porta, string $cor, string $tipo)
    {
        $this->marca = $marca;
        $this->num_porta = $num_porta;
        $this->cor = $cor;  
        $this->tipo = $tipo;
    }

    function andar()
    {
        echo "{$this->marca} ta andando\n";
    }
}

$carro = new Automovel("toyota", "4", "vermelho", "suv\n");
$carro->andar();

$moto = new Automovel("honda", "0", "branco", "esportivo");
$moto->andar();

$onibus = new Automovel("mercedes", "3", "laranja", "transporte coletivo");
$onibus->andar();
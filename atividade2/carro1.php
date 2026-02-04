<?php

abstract class Carro{
    public string $nome;
    public int $numRodas;
    private int $numPortas;
    public string $marca;
    protected string $cor;
    public $velocidade;
    public $modelo;

    public function __construct(string $nome, int $numRodas, int $numPortas, string $marca, string $cor)
    {
        $this->nome = $nome;
        $this->numRodas = $numRodas;
        $this->numPortas = $numPortas;
        $this->marca = $marca;
        $this->cor = $cor;
    }



    abstract public function tipo(): string;

    public function andar(): void {
        $this->velocidade += 20;
        echo "{$this->nome} está andando a {$this->velocidade} km/h<br>";
    }

    public function virar(string $lado): void {
        echo "{$this->nome} virou para a {$lado}<br>";
    }

    public function frear(): void {
        $this->velocidade = 0;
        echo "{$this->nome} freou e parou<br>";
    }

    public function info(): void {
        echo "Marca: {$this->marca}<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Modelo: {$this->modelo}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}

class CarroRapido extends Carro{
     public function tipo(): string {
        return "Carro mais rapido
        ";
    }
}

$wolkwagen = new CarroRapido("Wolks", 4, 4, "wolkswagen", "amarelo");
$wolkwagen->andar();

?>
<?php

namespace Projeto\Estacionamento\PHP;
use Projeto\Estacionamento\PHP\entrada;
class Entrada {
    private int $codigo;
    private string $veiculo;
    private string $placa;
    private string $horarioent;
    private string $horariosaida;
    private string $nome;

    public function __construct(
        int $codigo,
        string $veiculo,
        string $placa,
        string $horarioent,
        string $horariosaida,
        string $nome
    ) {
        $this->codigo = $codigo;
        $this->veiculo = $veiculo;
        $this->placa = $placa;
        $this->horarioent = $horarioent;
        $this->horariosaida = $horariosaida;
        $this->nome = $nome;
    }

    public function imprimir(): string
    {
        return "<br><br>Código: " . $this->codigo .
               "<br>Veículo: " . $this->veiculo .
               "<br>Placa: " . $this->placa .
               "<br>Horário de entrada: " . $this->horarioent .
               "<br>Horário de saída: " . $this->horariosaida;
    }
}
?>

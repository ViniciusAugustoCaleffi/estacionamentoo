<?php
namespace Projeto\Estacionamento\PHP;

use Projeto\Estacionamento\PHP\cliente;

class cliente{
    private string $nome;
    private int $cpf;
    private string $veiculo;
    private int $placa;



function __construct(
    int $codigo,
    string $nome,
    int $cpf,
    string $veiculo,
    mixed $placa,
    ){
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->veiculo=$veiculo;
        $this->placa=$placa;

}


}//Fim da class


?>
<?php

namespace Projeto\Estacionamento\PHP;

require_once('entrada.php');
require_once('mensalista.php');
require_once('saida.php');


    use Projeto\Estacionamento\PHP\saida;
    use Projeto\Estacionamento\PHP\cliente;
    use Projeto\Estacionamento\PHP\entrada;
    use Projeto\Estacionamento\PHP\mensalista;
    use Projeto\Estacionamento\PHP\Funcionario;

    $entrada = new entrada(123,"VEICULO",231241241424,"18:18","18:19","vinicius");
    echo $entrada->imprimir();
    
?>

<?php
    namespace Projeto\Estacionamento\PHP;
   //conexão esteja  completa
    require_once("cliente.php");
    use  Projeto\Estacionamento\PHP\cliente;
    
?>
<Doctype HTML>
<HTML lang="PT-BR">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="POST">
            <label>Codigo:</label>
            <input type="text" id="codigo" name="codigo"/><br><br>

            <label>Cpf</label>
            <input type="text" id="cargo" name = "cargo"/><br><br>

            <label>Carro</label>
            <input type="number" id="salario" name = "salario"/><br><br>

            <label>nome</label>
            <input type="text" id="setor" name = "setor"/><br><br>

            

            <button>Cadastrar entrada
            <?php
                try{
                $Cliente1 = new cliente( "2132321","bibis","2131231","rua");
                $codigo     = $_POST['codigo'];
                $cpf        = $_POST['cpf'];
                $nome       = $_POST['nome'];

                }catch (Exception $erro){
                    echo $erro;
                }
            ?>
            </button><br><br>
            <?php echo  $funcionario->imprimir(). 
                   $pessoa1->imprimir();  

            ?>
        </form>
    </body>
</HTML>  






<?php
    namespace Projeto\Estacionamento\PHP;
   //conexão esteja  completa
    require_once("cliente.php");
    use  Projeto\Estacionamento\PHP\cliente;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saida</title>
</head>
<body>

<form method="POST">


            <label>data de Entrada:</label>
            <input type="date" id="entrada" name="entrada"/><br><br>

            <label>data de Saida:</label>
            <input type="date" id="saida" name="saida"/><br><br>

            <label>Horario de Entrada:</label>
            <input type="time" id="entrada" name="entrada"/><br><br>

            <label>Horario de Saida:</label>
            <input type="time" id="saida" name="saida"/><br><br>
<?php



?>
    
</body>
</html>
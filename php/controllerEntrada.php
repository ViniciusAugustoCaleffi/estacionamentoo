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
           Codigo: <?php
            echo rand(5, 30), "\n";
            ?>
            <br><br>

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
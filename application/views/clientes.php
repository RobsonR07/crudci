<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="PT-BR">
  <head>
    <title>Clientes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <!--CABEÇALHO-->
        <div class="d-flex justify-content-between" style="margin-top: 60px;">
            
            <h2>Clientes</h2>
            <div>
            <?php if(isset($mensagens)) echo $mensagens; ?>
            </div>
            <div>
                <!--Adcionar novo cliente-->
                <a href="cliente/novo" title="Adicionar Novo Cliente" class="btn btn-success"><i class="fas fa-plus" style="margin-right: 6px;"></i>Novo Cliente</a>
            </div>
        </div>
        <!--FIM CABEÇALHO-->
        <!--Tabela de Listagem-->
        <table class="table table-striped table-hover" style="margin-top: 10px;">
        <thead>
            <tr>
            <th>#</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Sobrenome</th>
            <th class="text-center">CPF</th>
            <th class="text-center">Ação</th>
            </tr>
        </thead>
  
<?php
    //CONTADOR DE REGISTROS
    $cont = 0;
    //IRAR EXIBIR ID, NOME E SOBRENOME DOS CLIENTE CADASTRADOS
    foreach ($Clientes as $cliente){
        echo '<tr>';
            echo '<td>'.$cliente->idCliente.'</td>';
            echo '<td class="text-center">'.$cliente->Nome.'</td>';
            echo '<td class="text-center">'.$cliente->Sobrenome.'</td>';
            echo '<td class="text-center">'.$cliente->CPF.'</td>';
            //IMPRIMIR OS BOTÕES DE AÇÕES VIZUALIZAR, EDITAR, APAGAR
            echo '<td class="text-center">';
                echo ' <a href="cliente/vizualizar/'.$cliente->idCliente.'" title="Vizualiza todos os dados de '.$cliente->Nome.' '.$cliente->Sobrenome.'" class="btn btn-outline-primary"><i class="fas fa-search"></i></a> ';
                echo ' <a href="cliente/edit/'.$cliente->idCliente.'" title="Editar dados de '.$cliente->Nome.' '.$cliente->Sobrenome.'" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a> ';
                echo ' <button title="Deletar dados de '.$cliente->Nome.' '.$cliente->Sobrenome.'" onclick="if(confirm(\'Deseja realmente apagar o registro de '.$cliente->Nome.' '.$cliente->Sobrenome.'? \')){location.href=\'cliente/delete/'.$cliente->idCliente.'\'}" type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button> ';
            echo '</td>';
        echo '</tr>';
        $cont++;
    }
?>  <br/>
    </table>
        <div class="d-flex justify-content-between">      
            <h6>Clientes Registrados: <?php echo $cont; ?></h6>
            <div>
                <button title="Remove todos os clientes cadastrados" onclick="if(confirm('Deseja realmente apagar todos os registros?')){location.href='cliente/limpar'}" type="button" class="btn btn-danger"><i class="fas fa-broom" style="margin-right: 6px;"></i> Limpar Tabela</button>
            </div>   
        </div>
    </div>    
    <br/>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
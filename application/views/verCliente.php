<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="PT-BR">
  <head>
    <title>Cliente <?php echo $Cliente->Nome; ?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 25px;">
        <!--CABEÇALHO-->
        <div class="d-flex justify-content-between">
            <div>
                <!--BOTÃO PARA VOLTAR A PAGINA INICIAL-->
                <a href="../../" class="btn btn btn-secondary" style="border-radius: 500px"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div>
                <h2>Dados de <?php echo $Cliente->Nome; ?></h2>
            </div>
            <div>
            </div>
        </div>
        <!--FIM CABEÇALHO-->
    
        <!-- DADOS -->
        <div class="container" style="margin-top: 35px;">
            <div class="d-flex justify-content-start">
                <div class="d-inline-flex flex-column" style="background-color:rgba(204, 204, 204, .2); padding: 10px; padding-bottom: 50px; border-radius: 10px;">
                    <?php echo'<img src="../../img/'.$Cliente->Imagem.'" alt="'.$Cliente->Nome.'" style="width: 250px; height: 250px;" class="img-thumbnail">'; ?>
                    <br/>
                    <a href="../../cliente/edit/<?php echo $Cliente->idCliente; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> EDITAR DADOS</a>
                    <br/>
                    <button onclick="if(confirm('Deseja realmente apagar o registro de <?php echo $Cliente->Nome.' '.$Cliente->Sobrenome;?> ?')){location.href='../../cliente/delete/<?php echo $Cliente->idCliente; ?>'}" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELETAR DADOS</button>
                </div>
                
                <div class="d-flex flex-column" style="margin-left: 30px; margin-top: 70px;">
                    <div>
                        <span style="font-weight: bold;">Nome: </span> <span> <?php echo $Cliente->Nome;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Sobrenome:</span><span> <?php echo $Cliente->Sobrenome;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Data de Nascimento:</span><span> <?php echo $Cliente->DNasc;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">CPF:</span><span> <?php echo $Cliente->CPF;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">E-mail:</span><span> <?php echo $Cliente->Email;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">CEP:</span><span> <?php echo $Cliente->CEP;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Logadouro: </span><span> <?php echo $Cliente->Logradouro;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Numero:</span><span> <?php echo $Cliente->Numero;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Complemento:</span><span> <?php echo $Cliente->Complemento;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Bairro: </span><span> <?php echo $Cliente->Bairro;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Cidade:</span><span> <?php echo $Cliente->Cidade;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Telefone: </span><span> <?php echo $Cliente->Telefone;?> </span>
                    </div>
                    <div>
                        <span style="font-weight: bold;">Celular:</span><span> <?php echo $Cliente->Celular;?> </span>
                    </div>
                </div>
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
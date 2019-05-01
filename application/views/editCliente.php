<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="PT-BR">
  <head>
    <title>Editar Cliente <?php echo $Cliente->Nome; ?></title>
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
                <h2>Cliente <?php echo $Cliente->Nome; ?></h2>
            </div>
            <div>
                <p style="color:red;">(*) Campos Obrigatorios</p>
            </div>
        </div>
        <!--FIM CABEÇALHO-->
        
        <div class="container" style="margin-top: 35px;">
           <!--FORMULARIO DE CADASTRO-->
            <form action="../../cliente/salvar" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col">
                        <label for="nome"><span style="color:red">*</span>Nome:</label>
                        <input id="nome" type="text" name="nome" value="<?php echo $Cliente->Nome; ?>" class="form-control" autofocus required>
                    </div>
                    <div class="col">
                        <label for="sobrenome"><span style="color:red">*</span>Sobrenome:</label>
                        <input id="sobrenome" type="text" name="sobrenome" value="<?php echo $Cliente->Sobrenome; ?>" class="form-control" required>
                    </div>
                </div>
                <input id="idCliente" type="hidden" name="idCliente" value="<?php echo $Cliente->idCliente; ?>" class="form-control" required>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="CPF"><span style="color:red">*</span>CPF:</label>
                        <input id="CPF" type="text" name="CPF" value="<?php echo $Cliente->CPF; ?>" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="DNasc"><span style="color:red">*</span>Data De Nascimento:</label>
                        <input id="DNasc" type="date" name="DNasc" value="<?php echo $Cliente->DNasc; ?>" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="tele"><span style="color:red">*</span>Telefone:</label>
                        <input id="tele" type="text" name="tele" value="<?php echo $Cliente->Telefone; ?>" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="cel">Celular:</label>
                        <input id="cel" type="text" name="cel" value="<?php echo $Cliente->Celular; ?>" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="email"><span style="color:red">*</span>E-mail:</label>
                        <input id="email" type="email" name="email" value="<?php echo $Cliente->Email; ?>" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="CEP">CEP:</label>
                        <input id="CEP" type="text" name="CEP" value="<?php echo $Cliente->CEP; ?>" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="log"><span style="color:red">*</span>Logradouro:</label>
                        <input id="log" type="text" name="log" value="<?php echo $Cliente->Logradouro; ?>" class="form-control" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="numero"><span style="color:red">*</span>Numero:</label>
                        <input id="numero" type="text" name="numero" value="<?php echo $Cliente->Numero; ?>" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="Comple">Complemento:</label>
                        <input id="Comple" type="text" name="Comple" value="<?php echo $Cliente->Complemento; ?>" class="form-control">
                    </div>
                    <div class="col">
                        <label for="bairro"><span style="color:red">*</span>Bairro:</label>
                        <input id="bairro" type="text" name="bairro" value="<?php echo $Cliente->Bairro; ?>" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="city"><span style="color:red">*</span>Cidade:</label>
                        <input id="city" type="text" name="city" value="<?php echo $Cliente->Cidade; ?>" class="form-control" required>
                    </div>
                </div>
                <br/>
                <!--BOTÃO PARA ENVIO-->
                <div class="form-group">
                    <label for="Foto"><span style="color:red">*</span>Foto:</label><a data-toggle="tooltip" data-placement="right"  title="Extensões Permitidas: JPG, JPEG, PNG." style="margin-left: 60px;"><i class="far fa-question-circle"></i></a>
                    <input type="file" class="form-control-file" name="Foto" id="Foto" required>    
                </div>
                <div class="d-flex justify-content-center">    
                    <button type="submit" class="btn btn-success">CADASTRAR</button>                 
                <div>
            </form>
            <!--FIM DO FORMULARIO-->
        </div>   
    </div>
    <br/>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://localhost/CRUDCI/js/cpf.js"></script>
      
    <!-- Script de completar o CEP -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="http://localhost/CRUDCI/js/complet-cep.js"></script>
    <script type="text/javascript" src="http://localhost/CRUDCI/js/jquery.maskedinput-1.1.4.pack.js"></script>
    <script type="text/javascript" src="http://localhost/CRUDCI/js/mask.js"></script>
  </body>
</html>
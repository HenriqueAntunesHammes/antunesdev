<?php
session_start();
ob_start();
include_once 'util/helper.class.php';
?>
<!DOCTYPE php>
<html lang="pt-br">
<head>
  <title>Cadastro de Cliente CooperCred </title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
</head>
  <body>
        <?php
        echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
        unset($_SESSION['msg']);
        ?>
        <div class="row">
          <div id="background_esquerda" class="col-md-3">
              <div class="col-sm-12">
                <img class="img-responsive img-center" id="img_bk_esquerda" src="img/logo.png" alt="Logo CooperCred" height="75" width="100">
                <p class="font-weight-bold"><span id="cc"> EMPRESA X </span> </p>
              </div>
              <div class="col-sm-12">
                <p id="espacamento_bk_esquerda" class="font-weight-bold"><span> Cadastro de Cliente </span> </p>
                <p> Bem-vindo ao sitema de cadastro de Clientes</p>
              </div>
              <div class="col-sm-12">
                <p id="espacamento2_bk_esquerda" class="font-weight-bold"><span> Preencha Corretamente <span> </p>
                <p> Nossos campos são validados e rastreados, por favor não coloque informações falsas. </p>
              </div>
              <div class="col-sm-12">
                <p id="espacamento3_bk_esquerda" class="font-weight-bold"><span>  Contato <span></p>
                <p> +51 9 1234-5678 // contato@gmail.com </p>
              </div>
          </div>
          <div class="col-md-9">
            <div class="jumbotron">
              <h3 class="font-weight-bold text-center"> Campos com * são obrigatórios </h3>
            <div>
            <form name="cadcliente" method="post" action="">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Você é uma pessoa Física/Juridica?*</label>
                  <select name="selftipo" class="form-control">
                    <option value="fisica">Pessoa Física</option>
                    <option value="juridica">Pessoa Jurídica</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Você conversou com Quem?*</label>
                  <select name="txtsocio" class="form-control">
                    <option value="wilson">Nome 01</option>
                    <option value="junior"> Nome 02</option>
                    <option value="henrique">Nome 03</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Seu primeiro nome:*</label>
                  <input type="text" name="txtnome" pattern="^[a-zA-ZÁ-ù]{2,30}$" placeholder="John Example" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Seu sobrenome*:</label>
                  <input type="text" name="txtsobrenome" pattern="^[a-zA-ZÁ-ù]{5,30}$" placeholder="Sulivan Example" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Seu número de celular:*</label>
                  <input type="number" name="txtcelular" pattern="^[0-9]{5,12}$" placeholder="051 9 0000-0000" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Endereço de email:*</label>
                  <input type="email" name="txtemail" placeholder="example@gmail.com" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Seu número de CPF:*</label>
                  <input type="number" name="txtcpf" pattern="^[0-9.]{11,15}$" placeholder="011.111.011-82" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <div>
                    <label>Sua data de Nascimento [Dia/Mês/Ano]:*</label>
                    <input type="date" name="txtdatanasci" placeholder="Data de Nascimento do Cliente" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Nome da rua:*</label>
                  <input type="text" name="txtrua" pattern="^[A-zÁ-ü ]{2,100}$" placeholder="Rua do Cliente" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>Número da casa:*</label>
                    <input type="number" name="txtnumero" pattern="^[0-9]{2,20}$" placeholder="Número" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>Complemento:</label>
                    <input type="text" name="txtcomplemento" pattern="^[A-zÁ-ü ]{0,100}$" placeholder="Complemento" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>Bairro*</label>
                    <input type="text" name="txtbairro" pattern="^[A-zÁ-ü ]{5,100}$" placeholder="Bairro" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Nome do banco [Exemplo/Bradesco]:*</label>
                  <input type="text" name="txtbanco" placeholder="Nome do Banco" pattern="^[A-z ]{5,50}$" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>Agência:*</label>
                    <input type="number" name="txtagencia" placeholder="Agência" pattern="^[0-9]{2,11}$" class="form-control">
                </div>
                <div class="col-md-3">
                  <label>Número da Conta:*</label>
                  <input type="number" name="txtconta" placeholder="Conta" pattern="^[0-9.]{8,20}$" class="form-control">
                </div>
                <div class="col-md-3">
                  <label>Tipo de Conta:*</label>
                  <select name="operacao" class="form-control">
                    <option value="corrente"> Conta Corrente </option>
                    <option value="poupanca"> Conta Poupança </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-danger">
                <input type="reset" name="Limpar" value="Limpar" class="btn btn-dark">
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

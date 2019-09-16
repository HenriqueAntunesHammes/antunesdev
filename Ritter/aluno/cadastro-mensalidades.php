<?php
session_start();
ob_start();
include_once 'util/helper.class.php';
?>
<!DOCTYPE php>
<html lang="pt-br">
<head>
  <title>Cadastro de Alunos Uniritter</title>
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
    <body style="background-image: url(img/background.jpg);">
        <?php
        echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
        unset($_SESSION['msg']);
        ?>

        <!-- CADASTRO DE ALUNOS -->
        <div class="col-md-12 text-center">
            <img src="img/uniritter-logo.png" alt="Logo Ritter" width="250px">
        </div>
          <div class="col-md-12">
            <form name="cadaluno" method="post" action="">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Mensalidade</label>
                  <input type="text" name="txtnomealuno" pattern="^[a-zA-ZÁ-ù]{2,30}$" placeholder="John Example" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Vencimento</label>
                    <input type="date" name="txtnomeresponsavel" pattern="^[0-9]{5,12}$" placeholder="01/01/01" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Valor</label>
                  <select name="txtscampus" class="form-control">
                    <option value="100">R$ 100</option>
                    <option value="200">R$ 200</option>
                    <option value="300">R$ 300</option>
                    <option value="400">R$ 400</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Valor pago</label>
                  <select name="txtscampus" class="form-control">
                    <option value="100">R$ 100</option>
                    <option value="200">R$ 200</option>
                    <option value="300">R$ 300</option>
                    <option value="400">R$ 400</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Data do Pagamento</label>
                  <select name="txtscampus" class="form-control">
                    <option value="100"> 01 - 05</option>
                    <option value="100"> 06 - 15</option>
                    <option value="100"> 15 - 25</option>
                    <option value="100"> 26 - 31</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>STATUS</label>
                  <input type="number" name="txtcpfresponsavel" pattern="^[0-9]{5,12}$" placeholder="011.222.333-44" class="form-control">
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
  </body>
</html>

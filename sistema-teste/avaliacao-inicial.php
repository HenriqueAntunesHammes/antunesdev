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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
</head>
<body>
  <div class="col-md-12">
    <h1 class="text-center">Avaliação</h1>
    <div class="jumbotron">
      <form name="cadcliente" method="post" action="">
        <div class="row">
          <div class="form-group col-md-6">
            <label>Seu primeiro nome:</label>
            <input type="text" name="txtnome" pattern="^[a-zA-ZÁ-ù]{2,30}$" placeholder="John Example" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Seu sobrenome:</label>
            <input type="text" name="txtsobrenome" pattern="^[a-zA-ZÁ-ù]{5,30}$" placeholder="Sulivan Example" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label>Indicação:</label>
            <input type="text" name="ttxindicacao" pattern="^[a-zA-ZÁ-ù]{2,30}$" placeholder="Maria Example" class="form-control">
          </div>
          <div class="form-group col-md-4">
            <label>Estrelas:</label>
            <select name="txtestrela" class="form-control">
              <option value="uma"> <a> Uma Estrela </a> </option> <!-- 1 Estrela -->
              <option value="dois"><a> Duas Estrela </a></option> <!-- 2 Estrela -->
              <option value="tres"> <a> Tres Estrela </a> </option> <!-- 3 Estrela -->
              <option value="quatro"><a> Quatro Estrela </a></option> <!-- 4 Estrela -->
              <option value="cinco"><a> Cinco Estrela </a> </option> <!-- 5 Estrela -->
            </select>
          </div>
          <div class="form-group col-md-4">
            <label>Risco [A/M/B]?</label>
            <select name="txtrisco" class="form-control">
              <option value="1">Alto</option> <!-- 1 Estrela -->
              <option value="3">Medio</option>  <!-- 3 Estrela -->
              <option value="5">Baixo</option>  <!-- 5 Estrela -->
            </select>
          </div>
          <div class="col-md-8">

            <?  if($_POST['txtrisco'] == 'alto' && $_POST['txtestrela'] == 'uma') { ?>
              <a> 2 </a>
            <?  } ?>

            <!--
            }else($_POST['txtrisco'] === 'alto' && $_POST['txtestrela'] === 'duas'){
              return 2+1;
            }else($_POST['txtrisco'] === 'alto' && $_POST['txtestrela'] === 'tres'){
              return 3+1;
            }else($_POST['txtrisco'] === 'alto' && $_POST['txtestrela'] === 'quatro'){
              return 4+1;
            }else($_POST['txtrisco'] === 'alto' && $_POST['txtestrela'] === 'cinco'){
              return 5+1;
            }else($_POST['txtrisco'] === 'medio' && $_POST['txtestrela'] === 'uma'){
              return 1+3;
            }else($_POST['txtrisco'] === 'medio' && $_POST['txtestrela'] === 'duas'){
              return 2+3;
            }else($_POST['txtrisco'] === 'medio' && $_POST['txtestrela'] === 'tres'){
              return 3+3;
            }else($_POST['txtrisco'] === 'medio' && $_POST['txtestrela'] === 'quatro'){
              return 4+3;
            }else($_POST['txtrisco'] === 'medio' && $_POST['txtestrela'] === 'cinco'){
              return 5+3;
            }else($_POST['txtrisco'] === 'baixo' && $_POST['txtestrela'] === 'uma'){
              return 1+5;
            }else($_POST['txtrisco'] === 'baixo' && $_POST['txtestrela'] === 'duas'){
              return 2+5;
            }else($_POST['txtrisco'] === 'baixo' && $_POST['txtestrela'] === 'tres'){
              return 3+5;
            }else($_POST['txtrisco'] === 'baixo' && $_POST['txtestrela'] === 'quatro'){
              return 4+5;
            }else($_POST['txtrisco'] === 'baixo' && $_POST['txtestrela'] === 'cinco'){
              return 5+5;
            }
            ?> -->
          </div>
          <div class="form-group col-md-4">
            <label> Quantidade de Parcelas // Valor individual das Parcelas</label>
            <img src="img/quadro2.jpg" alt="" height="300" width="400">
          </div>
        </div>
        <div class="form-group">
          <input type="submit" name="avaliar" value="Avaliar" class="btn btn-danger">
          <input type="reset" name="Limpar" value="Limpar" class="btn btn-dark">
        </div>
      </form>
    </div>
  </div>
</body>
</html>

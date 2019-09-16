<?php
session_start();
ob_start();
include_once 'dao/clientesfuturosdao.class.php';
include_once 'modelo/cliente_futuros.class.php';
include_once 'util/helper.class.php';
$cfDAO = new CFDAO();
$array = $cfDAO->buscarcf();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Consulta de Clientes Futuros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/home.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <h1 class="jumbotron">Consulta de Clientes Futuros</h1>
    <?php
    if(isset($_SESSION['msg'])){
      Helper::alert($_SESSION['msg']);
      unset($_SESSION['msg']);
    }

    if(count($array) == 0){
        echo "<h2>Não há Clientes Futuros no banco!</h2>";
        return;
    }
    ?>
    <form name="filtrar" method="post" action="">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" name="txtfiltro" placeholder="Digite a sua pesquisa" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <select name="selfiltro" class="form-control">
            <option value="todos">Todos</option>
            <option value="id">Código</option>
            <option value="nome">Nome</option>
            <option value="sobrenome">Sobrenome</option>
            <option value="cpf">CPF</option>
            <option value="bairro">Bairro</option>
            <option value="indicacao">indicacao</option>
          </select>
        </div>
      </div>
      <div class="form-group ">
        <input type="submit" name="filtrar" value="Filtrar" class="btn btn btn-dark btn-block">
      </div>
    </form>

    <?php
    if(isset($_POST['filtrar'])){
      $pesquisa = $_POST['txtfiltro'];
      $filtro = $_POST['selfiltro'];
      if(!empty($pesquisa)){
        $cfDAO = new cfDAO();
        $array = $cfDAO->filtrar($pesquisa,$filtro);
        if(count($array) == 0){
        }
      }else{
        echo "<h3>Sua pesquisa não retornou nenhum Clientes Futuros!</h3>";
      }
    }
    ?>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Celular</th>
            <th>Indicaçao</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Celular</th>
            <th>Indicaçao</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Excluir</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          foreach($array as $l){
            echo "<tr>";
              echo "<td>$l->idcf</td>";
              echo "<td>$l->nome</td>";
              echo "<td>$l->sobrenome</td>";
              echo "<td>$l->celular</td>";
              echo "<td>$l->indicacao</td>";
              echo "<td>$l->cpf</td>";
              echo "<td>$l->datanasci</td>";
              echo "<td>$l->rua</td>";
              echo "<td>$l->numero</td>";
              echo "<td>$l->complemento</td>";
              echo "<td>$l->bairro</td>";
              echo "<td><a href='consulta-clientes_futuros.php?id=$l->idcf' class='btn btn-danger'>Excluir</a></td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
  if(isset($_GET['id'])){
    $cfDAO->deletarcf($_GET['id']);
    $_SESSION['msg'] = "cliente excluído com sucesso!";
      header("location:consulta-clientes_futuros.php");
  }
  ?>
</body>
</html>

<?php
session_start();
ob_start();
include_once 'dao/clientedao.class.php';
include_once 'modelo/cliente.class.php';
include_once 'util/helper.class.php';
$clientesDAO = new ClienteDAO();
$array = $clientesDAO->buscarCliente();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Consulta de Clientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/home.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <h1 class="jumbotron">Consulta de Clientes </h1>
    <?php
    if(isset($_SESSION['msg'])){
      Helper::alert($_SESSION['msg']);
      unset($_SESSION['msg']);
    }

    if(count($array) == 0){
        echo "<h2>Não há Clientes no banco!</h2>";
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
            <option value="socio">Sócio</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" name="filtrar" value="Filtrar" class="btn btn-danger btn-block">
      </div>
    </form>

    <?php
    if(isset($_POST['filtrar'])){
      $pesquisa = $_POST['txtfiltro'];
      $filtro = $_POST['selfiltro'];
      if(!empty($pesquisa)){
        $clientesDAO = new ClienteDAO();
        $array = $clientesDAO->filtrar($pesquisa,$filtro);
        if(count($array) == 0){
        }
      }else{
        echo "<h3>Sua pesquisa não retornou nenhum cliente!</h3>";
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
            <th>Email</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Banco</th>
            <th>Agência</th>
            <th>Conta</th>
            <th>Operação</th>
            <th>Fisica/Juridica</th>
            <th>Sócio</th>
            <th>Excluir</th>
            <th>Alterar</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Celular</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Banco</th>
            <th>Agência</th>
            <th>Conta</th>
            <th>Operação</th>
            <th>Fisica/Juridica</th>
            <th>Sócio</th>
            <th>Excluir</th>
            <th>Alterar</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          foreach($array as $l){
            echo "<tr>";
              echo "<td>$l->idCliente</td>";
              echo "<td>$l->nome</td>";
              echo "<td>$l->sobrenome</td>";
              echo "<td>$l->celular</td>";
              echo "<td>$l->email</td>";
              echo "<td>$l->cpf</td>";
              echo "<td>$l->datanasci</td>";
              echo "<td>$l->rua</td>";
              echo "<td>$l->numero</td>";
              echo "<td>$l->complemento</td>";
              echo "<td>$l->bairro</td>";
              echo "<td>$l->banco</td>";
              echo "<td>$l->agencia</td>";
              echo "<td>$l->conta</td>";
              echo "<td>$l->operacao</td>";
              echo "<td>$l->selftipo</td>";
              echo "<td>$l->socio</td>";

              /*if(isset($_SESSION['privateUser']){
               include...
                $u = unserialize($_SESSION['privateUser']);
                if($u->idUser == $l->idUser){
                echo "<td><a href='consulta-clientes.php?id=$l->idCliente' class='btn btn-dark'>Excluir</a></td>";
                echo "<td><a href='alterar-cliente.php?id=$l->idCliente' class='btn btn-warning'>Alterar</a></td>";
                }
            }*/

              echo "<td><a href='consulta-clientes.php?id=$l->idCliente' class='btn btn-danger'>Excluir</a></td>";
              echo "<td><a href='alterar-cliente.php?id=$l->idCliente' class='btn btn-dark'>Alterar</a></td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
  if(isset($_GET['id'])){
    $clientesDAO->deletarCliente($_GET['id']);
    $_SESSION['msg'] = "Cliente excluído com sucesso!";
      header("location:consulta-clientes.php");
  }
  ?>
</body>
</html>

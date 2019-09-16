<?php
session_start();
ob_start();
include_once 'util/helper.class.php';

if(isset($_GET['id'])){
  include_once "dao/clientedao.class.php";
  include_once "modelo/cliente.class.php";
  $cliente = new ClienteDAO();
  $array = $cliente->filtrar($_GET['id'],"codigo");
  $cliente = $array[0];
}else{
  header("location:consulta-clientes.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Edição de Cliente</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script> src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script> src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
  <body>
      <div class="container">
        <h1 class="jumbotron bg-info">Edição de Cliente</h1>

        <?php
        echo isset($_SESSION['msg']) ? Helper::alert($_SESSION['msg']) : "";
        unset($_SESSION['msg']);
        ?>

        <form name="cadcliente" method="post" action="">
          <div class="form-group">
            <select name="selftipo" class="form-control">
              <option value="fisica" <?php if(isset($cliente)){if($cliente->selftipo == "fisica"){echo "selected='selected'";}} ?>>Pessoa Física</option>
              <option value="juridica"  <?php if(isset($cliente)){if($cliente->selftipo == "jurifica"){echo "selected='selected'";}} ?>>Pessoa Jurídica</option>
            </select>
          </div>
          <div class="form-group">
            <label>Você conversou com Quem?</label>
            <select name="txtsocio" class="form-control">
              <option value="wilson" <?php if(isset($cliente)){if($cliente->socio == "wilson"){echo "selected='selected'";}} ?>>Wilson</option>
              <option value="junior" <?php if(isset($cliente)){if($cliente->socio == "junior"){echo "selected='selected'";}} ?>>Junior</option>
              <option value="henrique" <?php if(isset($cliente)){if($cliente->socio == "henrique"){echo "selected='selected'";}} ?>>Henrique</option>
            </select>
          </div>

          <div class="form-group">
            <input type="text" name="txtnome" placeholder="Nome do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->nome; }?>">
          </div>

          <div class="form-group">
            <input type="text" name="txtsobrenome" placeholder="Sobrenome do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->sobrenome; }?>">
          </div>

          <div class="form-group">
            <input type="number" name="txtcelular" placeholder="Número do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->celular; }?>">
          </div>

          <div class="form-group">
            <input type="email" name="txtemail" placeholder="Email do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->email; }?>">
          </div>

          <div class="form-group">
            <input type="number" name="txtcpf" placeholder="CPF do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->cpf; }?>">
          </div>

          <div class="form-group">
            <input type="date" name="txtdatanasci" placeholder="Data de Nascimento do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->datanasci; }?>">
          </div>

          <div class="form-group">
            <input type="text" name="txtrua" placeholder="Rua do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->rua; }?>">
          </div>

          <div class="form-group">
            <input type="number" name="txtnumero" placeholder="Número do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->numero; }?>">
          </div>

          <div class="form-group">
            <input type="text" name="txtcomplemento" placeholder="Complemento do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->complemento; }?>">
          </div>

          <div class="form-group">
            <input type="text" name="txtbairro" placeholder="Bairro do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->bairro; }?>">
          </div>

          <div class="form-group">
            <input type="text" name="txtbanco" placeholder="Banco do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->banco; }?>">
          </div>

          <div class="form-group">
            <input type="text" name="txtagencia" placeholder="Agencia do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->agencia; }?>">
          </div>

          <div class="form-group">
            <input type="number" name="txtconta" placeholder="Conta do Cliente" class="form-control" value="<?php if(isset($cliente)){echo $cliente->conta; }?>">
          </div>

          <div class="form-group">
            <select name="operacao" class="form-control">
              <option value="corrente" <?php if(isset($cliente)){if($cliente->operacao == "web"){echo "selected='selected'";}} ?>> Coonta Corrente </option>
              <option value="poupanca"  <?php if(isset($cliente)){if($cliente->operacao == "mobile"){echo "selected='selected'";}} ?>>Conta Poupança </option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="alterar" value="Alterar" class="btn btn-primary">
            <input type="reset" name="Limpar" value="Limpar" class="btn btn-danger">
          </div>
        </form>

        <?php
          if(isset($_POST['alterar'])){
            include_once 'modelo/cliente.class.php';
            include_once 'dao/clientedao.class.php';
            include 'util/padronizacao.class.php';

            $cliente = new Cliente();
            $cliente->idCliente = $_GET['id'];
            $cliente->nome = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txtnome']));
            $cliente->sobrenome = Padronizacao::antiXSS(Padronizacao::padronizarMaiMin($_POST['txtsobrenome']));
            $cliente->celular = ($_POST['txtcelular']);
            $cliente->email = $_POST['txtemail'];
            $cliente->cpf = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtcpf']));
            $cliente->datanasci = Padronizacao::antiXSS($_POST['txtdatanasci']);
            $cliente->rua = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtrua']));
            $cliente->numero = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtnumero']));
            $cliente->complemento = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtcomplemento']));
            $cliente->bairro = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtbairro']));
            $cliente->banco = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtbanco']));
            $cliente->agencia = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtagencia']));
            $cliente->conta = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtconta']));
            $cliente->operacao = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['operacao']));
            $cliente->socio = Padronizacao::antiXSS(Padronizacao::padronizarMin($_POST['txtsocio']));

            $clienteDAO = new ClienteDao();
            $clienteDAO->alterarCliente($cliente);
            $_SESSION['msg'] = "Cliente alterado com sucesso!";
            header("location:consulta-clientes.php");
            ob_end_flush();
          }
        ?>
      </div>
  </body>
</html>

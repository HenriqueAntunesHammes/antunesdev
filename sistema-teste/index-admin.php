<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> CooperCred </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="CooperCred GrupoCC Cooporativa CooperCred Cooper Cred">
  <meta name="author" content="Henrique Antunes">
  <meta name="keywords" content="CooperCred, Cooporativa, GrupoCC, Cooper Cred, Crédito">
  <link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
body{
   background-image: url("img/background.jpg");
   background-repeat: no-repeat;
   background-size: 100%;
}
.sair{
  float: right;
}
 #testeimg{
  background-position: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 400px;
 }

 #welcome{
   display: block;
   width: max;
   color: #fff;
   font-size: 50px;
   font-family: 'Raleway', sans-serif;
   font-weight: 100px;
 }

#welcome2{
  background-color: rgba(0, 0, 0, 0.3);
  font-family: 'Raleway', sans-serif;
}
 section p{
   display: block;
   margin-left: auto;
   margin-right: auto;
   width: 1000px;
   color: #fff;
   font-size: 25px;
   font-family: 'Raleway', sans-serif;
   font-weight: 100px;;
 }
.navbar {
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.3);
    background: rgba(0, 0, 0, 0.3);
    color: rgba(0, 0, 0, 0.3);
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: red;
}

.show {
    display: block;
}
</style>
</head>
<body>
  <div class="navbar">
    <a> CooperCred </a>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction()">Clientes
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content" id="myDropdown">
        <a href="cadastro-cliente.php"> Cadastrar Clientes </a>
        <a href="consulta-clientes.php"> Consultar Clientes </a>
        <a href="#"> Avaliar Clientes   </a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction2()">Orçamento
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content" id="myDropdown2">
        <a href="avaliacao-inicial.php"> Avaliação Inicial </a>
        <a href="#"> Realizar Orçamento </a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction3()">Aba 3
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content" id="myDropdown3">
        <a href="#"> teste </a>
        <a href="#"> teste </a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction4()">Aba 4
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content" id="myDropdown4">
        <a href="#"> teste </a>
        <a href="#"> teste </a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="myFunction5()">Próximos
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content" id="myDropdown5">
        <a href="cadastro-futuro-clientes.php" >  Cadastro Clientes </a>
        <a href="consulta-clientes_futuros.php"> Consulta Clientes </a>
      </div>
    </div>
    <div class="sair">
      <a href="index.php"> Sair </a>
    </div>
  </div>

  <div class="col-md-4">
    <img id="testeimg"  src="img\logo.png" width="auto" height="350px">
  </div>
  <div>
    <section>
      <div>
        <p id="welcome">Seja bem vindo [nome] ao Setor de Admin </p>
        <div>
          <p id="welcome2"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  the industry's stanv the industry's stan the industry's stan  </p>
        </div>
      </div>
  </section>
  </div>
<script>
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
  }

  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
      var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
    }
  }

  function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show");
  }

  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
      var myDropdown2 = document.getElementById("myDropdown2");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
    }
  }

  function myFunction3() {
      document.getElementById("myDropdown3").classList.toggle("show");
  }

  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
      var myDropdown3 = document.getElementById("myDropdown3");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
    }
  }

  function myFunction4() {
      document.getElementById("myDropdown4").classList.toggle("show");
  }

  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
      var myDropdown4 = document.getElementById("myDropdown4");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
    }
  }

  function myFunction5() {
      document.getElementById("myDropdown5").classList.toggle("show");
  }

  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
      var myDropdown5 = document.getElementById("myDropdown5");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
    }
  }
</script>
</body>
</html>

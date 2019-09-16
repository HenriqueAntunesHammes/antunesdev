<!DOCTYPE html>
<html lang="PT-BR">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Antunes Technology and Development </title>
      <meta name="title" content="AntunesDev - Antunes Technology and Development">
      <meta name="description" content="Plataforma que serve como portifólio para expor trabalhos sobre o Freelancer, Henrique Antunes Dev">
      <meta name="keywords" content="AntunesDev, Antunes Dev Tech, Freelancer Porto Alegre, Freelancer Alvorada, Desenvolvedor, Cursos Online Gratis, cursos online">
      <meta name="language" content="English">
      <meta name="author" content="Henrique Antunes - Antunes Technology and Development">
      <link rel="icon" href="../img/icon.png" type="image/png" sizes="16x16">
      <link href="../css/home.css" rel="stylesheet">
      <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">
      <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <style>
      #main{
        margin-top: 150px;
      }#footer{
        margin-top: 140px;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  background-image: url("../img/background-ritter.jpg");
  width: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 70em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
@media (max-width: 767px){
  body {
     background-image: url("../img/background_1.png");
     background-repeat: no-repeat, repeat;
     padding-right: 25px;
     width: 100%;
   }#main h1{
     font-size: 34px;
   }#main h2{
     font-size: 28px;
   }#main a{
     height: 45px;
   }

 }
 .btn-circle.btn-xl {
    width: 100px;
    height: 100px;
    padding: 10px 16px;
    border-radius: 95px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

    </style>
    </head>
    <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><a>Uniritter</a></h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="molde-divida.php">Inicial</a>
        <a class="nav-link" href="mensalidades.php"> Pagar Mensalidade </a>
        <a class="nav-link" href="rematricula.php"> Rematrícula </a>
        <a class="nav-link" href="#">Fale conosco</a>
        <a class="nav-link active" href="#">Extrato</a>
      </nav>
    </div>
  </header>

  <div class="col-md-12">
      <div class="text-center">
         <img src="../img/logo-ritter.png" alt="img rematricula" width="50%" height="">
      </div><br>
      <div class="row col-md-12">
        <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th scope="col">Vencimento</th>
        <th scope="col">Valor</th>
        <th scope="col">Valor Pago</th>
        <th scope="col">Data de Pagamento</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>2019-2 N(3)</td>
        <td>05/05/2019</td>
        <td>R$ XXX </td>
        <td>R$ XXX</td>
        <td>05/05/2019</td>
        <td style="color:green">LIQUIDADO</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>2019-2 N(3)</td>
        <td>05/06/2019</td>
        <td>R$ XXX </td>
        <td>R$ XXX</td>
        <td>05/06/2019</td>
        <td style="color:green">LIQUIDADO</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>2019-2 N(3)</td>
        <td>05/07/2019</td>
        <td>R$ XXX </td>
        <td>R$ XXX</td>
        <td>-</td>
        <td style="color:red">EM ATRASO</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>2019-2 N(3)</td>
        <td>05/08/2019</td>
        <td>R$ XXX </td>
        <td>R$ XXX</td>
        <td>-</td>
        <td style="color:red">EM ATRASO</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>2019-2 N(3)</td>
        <td>05/09/2019</td>
        <td>R$ XXX </td>
        <td>R$ XXX</td>
        <td>-</td>
        <td style="color:red">EM ATRASO</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>2019-2 N(3)</td>
        <td>05/10/2019</td>
        <td>R$ XXX </td>
        <td>R$ XXX</td>
        <td>-</td>
        <td style="color:blue">EM ABERTO</td>
      </tr>
    </tbody>
  </table>
      </div>
  </div>
  
  <div class="row col-md-12"  style="padding-left: 40%;">
    <div>
        <button ype="button" class="btn btn-warning btn-circle btn-xl">
           <img src="../img/icon-divida.png" alt="icon exemple" width="75px" height="75px">
        </button>
        <br>
        <a href="divida.php" style="color:gold;font-size:20px;"> Negociação de Dívida</a>  
     </div>

  <footer class="mastfoot mt-auto">
    <div  id="footer" class="inner">
      <p>Website desenvolvido por <a href="http://antunesdev.com"> Antunes Technology and Development </a>.</p>
    </div>
  </footer>
</div>
</body>
</html>

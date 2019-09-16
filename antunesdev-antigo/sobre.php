<!DOCTYPE html>
<html lang="PT-BR">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Antunes Technology and Development</title>
      <meta name="title" content="AntunesDev - Antunes Technology and Development">
      <meta name="description" content="Plataforma que serve como portifólio para expor trabalhos sobre o Freelancer, Henrique Antunes Dev">
      <meta name="keywords" content="AntunesDev, Antunes Dev Tech, Freelancer Porto Alegre, Freelancer Alvorada, Desenvolvedor, Cursos Online Gratis, cursos online">
      <meta name="language" content="English">
      <meta name="author" content="Henrique Antunes - Antunes Technology and Development">
      <link rel="icon" href="img/icon.png" type="image/png" sizes="16x16">
      <link href="css/home.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">
      <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
      <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  background-image: url("img/background3.png");
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
  max-width: 42em;
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
     background-image: url("img/background3.png");
     padding-right: 25px;
     width: 100%;
   }#main h1{
     font-size: 34px;
   }#main h2{
     font-size: 28px;
   }#main a{
     height: 45px;
   }#space{
       margin-top:20px;
   }#img{
       margin-left:50px;
   }

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

    </style>
    </head>
    <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><a>Antunes</a></h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="portifolio.php"> Portifólio </a>
        <a class="nav-link active" href="sobre.php"> Sobre Mim </a>
        <!-- <a class="nav-link" href="#">Contato</a> -->
      </nav>
    </div>
  </header>

  <main role="main">
    <div>
      <br><br>
      <h1> Quem sou eu? </h1>
      <h3> Eis aqui a resposta </h3>
      <br><br>
    </div>
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/henrique-antunes.jfif" width="140" height="140">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <h2>Henrique Antunes</h2>
        <p>Desenvolvedor Web <br> Nível - Junior</p>
        <p><a class="btn btn-secondary" href="https://www.linkedin.com/in/henrique-antunes-8b5652134/" target="_blank" role="button">Saiba Mais »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-8">
        <br><br>
        <!-- <svg class="bd-placeholder-img" width="350" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <h2>Resumo sobre mim</h2>
        <p> Possuo experiência para Desenvolvimento web e para aplicações desktop. Atuo como Freelancer, desenvolvendo websites e sistemas, gosto de passar o conhecimento adiante. Sou pró-ativo, gosto de aprender e pretendo lançar cursos web para ajudar outras pessoas com o desenvolvimento.</p>
      </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6">
        <p><strong> Bom, meu nome é Henrique Antunes </strong><br>(caso isso ainda não tenha ficado claro), sou paranaense de Foz do Iguaçu, atualmente morando em <br>Porto - Alegre - RS, tenho 18 anos.</p>
        <p>Obviamente nada disso interessa a você, né? Bem, eu sou programador de linguagens para internet há pouco tempo, e faço isso hoje simplesmente porque é o que eu gosto de fazer, além de sempre querer aprender mais</p>
      </div>
      <div class="col-md-6" width="400" height="320">
        <img src="img/skin1/sobre.png" alt="Sobre mim" width="100%" height="100%">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-4">
        <p><strong> Entrei na Área </strong><br>Começei a trabalhar com informática em uma época que todos já ultilizamos ela, e como sempre gostei de "jogar", me identifiquei com a programação web. E aqui estou eu!</p>
      </div>
      <div class="col-md-8">
        <p><strong> Lugares onde Trabalhei </strong><br>Eu trabalhei em alguns lugares aqui de Porto Alegre, das quais me orgulho muito. Fiz parte de ótimas equipes, tive colegas fantásticos que me ensinaram muito, e graças a eles carrego comigo todo o conhecimento que tenho hoje.</p>
        <p><strong> Também tive uma ótima experiência </strong> trabalhando em uma das empresas de tecnologia do goverdo, do Rio Grande do Sul, que foi um grande aprendizado e experiência de vida.</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="row col-md-12">
        <div id="img" class="col-md-6 text-center img-center" width="500" height="500">
          <img src="img/skin1/servicos.png" alt="HTML, CSS, jQuery, PHP, MySQL" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="100%" height="100%">
           <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
        </div>
        <div id="space" class="col-md-6">
          <p><strong>Recorte HTML/CSS</strong><br>Clientes me mandam um belo design, e eu recorto ele em HTML, CSS e Javascript com carinho e muita atenção aos menores detalhes.</p>
          <p><strong>Programação PHP</strong><br>Programo em PHP com banco de dados MySQL. Faço sites, sistemas e manutenções diversas, seja um projeto novo ou já existente. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading">Ok, mas e se eu quiser falar com você pelo telefone?</h2>
        <br>
        <p class="lead"> Veja bem: eu trabalho sozinho, com uma fila de trabalhos bastante otimizada, e recebo centenas de orçamentos todos os meses. Infelizmente eu não conseguiria manter meu padrão de qualidade e agilidade se atendesse a orçamentos o tempo inteiro. </p>
      </div>
      <div class="col-md-6">
        <h2 class="featurette-heading"> Isso quer dizer que meus clientes não falam comigo ?</h2><br>
        <p class="lead"> Pelo contrário! Meu telefone está a disposição de todos os meus clientes. Mas se você está conhecendo o meu trabalho agora, mande um email explicando o seu projeto com detalhes, que eu ficarei feliz em responder com uma estimativa de valores e prazo. </p>
      </div>
    </div>
    <hr>
    <div>
    <div class="col-md-12">
      <h3> E-mail: hhammes00@gmail.com <br> Ou utilize o link a baixo ;)</h3>
      <p class="lead">
        <a class="btn btn-lg btn-secondary" href="https://api.whatsapp.com/send?phone=5551983550052&text=Ol%C3%A1%2C%20Gostaria%20de%20Ajuda%20!">Contato via WhatsApp <img src="img\whatsapp-logo.png" width="25px" height="25px"> </a>
      </p>
    </div>
    </div>


</main>
  <footer class="mastfoot mt-auto">
    <div  id="footer" class="inner">
      <p>Website desenvolvido por <a href="http://antunesdev.com"> Antunes Technology and Development </a>.</p>
    </div>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</html>

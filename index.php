<?php
  include 'header.php';
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Página inicial do site da VI SACIC - Semana Acadêmica da Ciência da Computação da Unifal-MG.">
    <meta name="author" content="TriBit Jr.">

    <title>VI SACIC</title>

    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
    
  <body>

    <!--                                                 Slideshow                                             -->

    <section id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li class="dots" data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>


      <div class="carousel-inner">
        
        <a href="palestras.php" class="item active banner-palestras">
          <div class="slide-text">
            <div class="slide-heading-box">
              <h1 class="slide-heading"><span class="banner-span">Palestras</span></h1>
            </div>
            <div class="slide-subtitle-box">
              <h4 class="slide-subtitle"><span class="banner-span">Inscrições Abertas de 25/9 à 03/11</span></h4>
            </div>
          </div>
        <a href="minicursos.php" class="item banner-minicursos">
          <div class="slide-text">
            <div class="banner-heading-box">
              <h1 class="slide-heading"><span class="banner-span">Minicursos</span></h1>
            </div>
            <div class="slide-subtitle-box">
              <h4 class="slide-subtitle"><span class="banner-span">Inscrições Abertas de 25/9 à 03/11</span></h4>
            </div>
          </div>
        </a>
        </a>
        <a href="desafios.php" class="item banner-desafios">
          <div class="slide-text">
            <div class="slide-heading-box2">
              <h1 class="slide-heading"><span class="banner-span">Desafios de</span></h1>
            </div>
            <div class="slide-heading-box">
              <h1 class="slide-heading"><span class="banner-span">Programação</span></h1>
            </div>
            <div class="slide-subtitle-box">
              <h4 class="slide-subtitle"><span class="banner-span">Inscrições Abertas de 25/9 à 03/11</span></h4>
            </div>
          </div>
        </a>
        <a href="mesas.php" class="item banner-mesas">
          <div class="slide-text">
            <div class="slide-heading-box2">
              <h1 class="slide-heading"><span class="banner-span">Mesa</span></h1>
            </div>
            <div class="slide-heading-box">
              <h1 class="slide-heading"><span class="banner-span">Redonda</span></h1>
            </div>
            <div class="slide-subtitle-box">
              <h4 class="slide-subtitle"><span class="banner-span">Inscrições Abertas de 25/9 à 03/11</span></h4>
            </div>
          </div>
        </a>
        <a href="outros.php" class="item banner-outros">
          <div class="slide-text">
            <div class="slide-heading-box2">
              <h1 class="slide-heading"><span class="banner-span">Outras</span></h1>
            </div>
            <div class="slide-heading-box">
              <h1 class="slide-heading"><span class="banner-span">Atividades</span></h1>
            </div>
            <div class="slide-subtitle-box">
              <h4 class="slide-subtitle"><span class="banner-span">Inscrições Abertas de 25/9 à 03/11</span></h4>
            </div>
          </div>
        </a>
        
      </div>


      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <i class="fa fa-2x fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <i class="fa fa-2x fa-angle-right aria-hidden="true"></i>
        <span class="sr-only">Next</span>
      </a>
    </section>

    <!--                                                 Cronometro                                             -->

    <section class="cronometro">

      <div class="text-center">
        <div id="dia" class="cronometro-output"></div>
        <div id="hora" class="cronometro-output"></div>
        <div id="minuto" class="cronometro-output"></div>
        <div id="segundo" class="cronometro-output"></div>
      </div>
      <div class="cronometro-paragrafo-box">
        <p class="cronometro-paragrafo text-center">Para a SACIC 2017</p>
        <p class="cronometro-paragrafo-2 text-center">Início em 06/11/2017 9h</p>
      </div>
    </section>

    <!--                                               Programacao-stats                                             -->

    <section class="programacao-stats">
      <h1 class="text-center programacao-stats-heading">O QUE VEM POR AI</h1>

      <div class="icons-box">
        <img class="icons-img" src="img/palestra-icon.png" alt="Palestras">
        <img class="icons-img" src="img/minicursos-icon.png" alt="Minicursos">
        <!-- <img class="icons-img" src="img/workshop-icon.png" alt="Workshop"> -->
        <img class="icons-img" src="img/desafios-icon.png" alt="Competições de Programação">
        <img class="icons-img" src="img/mesa-icon.png" alt="Mesa Redonda">
        <img class="icons-img" src="img/cafe-icon.png" alt="Coffee Break">
        <img class="icons-img" src="img/relogio-icon.png" alt="Horas Formativas">
        <!-- <img class="icons-img" src="img/contribuidores-icon.png" alt="Contribuidores"> -->
        
      </div>

      <div class="programacao-stats-paragrafo-box">
        <p class="text-center programacao-stats-paragrafo">Venha nos prestigiar na VI SACIC</p>
        <p class="text-center programacao-stats-paragrafo-2">De 06 a 11 de Novembro de 2017</p>
      </div>

    </section>

    <div class="programacao-background">
      <div class="wrapper">
      <iframe height="500" width="1000" src="https://docs.google.com/spreadsheets/d/1lH3_6gQcO6gDQ14BjswLzfpYAjCMMN-fj_XhPwzvSvM/edit?usp=sharing"></iframe>
    </div>
    </div>
    

    
    <script type="text/javascript" src="js/cronometro.js"></script>
    
  </body>
  <?php
      include 'footer.php';
  ?>

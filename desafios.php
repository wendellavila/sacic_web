<?php
  include 'header.php';
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Desafios de programação presentes na VI SACIC - Semana Acadêmica da Ciência da Computação da Unifal-MG.">
    <meta name="author" content="TriBit Jr.">

    <title>Desafios de Programação - VI SACIC</title>

    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    
  </head>

  <body>
    <section>
      <div class="banner-desafios">
        <div class="banner-text">

          <div class="banner-heading-box">
            <h1 class="banner-heading"><span class="banner-span">Desafios de</span></h1>
          </div>
          <div class="banner-heading-box2">
            <h1 class="banner-heading"><span class="banner-span">Programação</span></h1>
          </div>
          <div class="banner-subtitle-box">
            <h4 class="banner-subtitle"><span class="banner-span">Informações Gerais</span></h4>
          </div>

        </div>

        <p class="banner-paragrafo">
          A VI SACIC promoverá desafios de programação, com o objetivo de solucionar dados problemas por meio da programação.
        </p>

      </div>
    </section>

    <section>
      <div class="container-fluid programacao-background">
        <div class="row text-center">
          <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-2">
            <br>
            <img class="programacao-avatar" src="img/competicao-avatar.jpg" alt="Competição de Programação">
            <br>
            <h2 class="programacao-h2">Competição de Programação</h2>
            <br><br>

            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#competicao-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>
            <br>

          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <br>
            <img class="programacao-avatar" src="img/capture-avatar.jpg" alt="Capture the Flag">
            <br>
            <h2 class="programacao-h2">Capture the Flag</h2>
            <br><br>

            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#capture-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>
            
            <br>

          </div>
          
        </div>
      </div>
    </section>

  </body>
<?php
  include 'footer.php';
  include 'desafios-modal.php';
?>
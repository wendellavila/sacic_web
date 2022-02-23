<?php
  include 'header.php';
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Mesas redondas presentes na VI SACIC - Semana Acadêmica da Ciência da Computação da Unifal-MG.">
    <meta name="author" content="TriBit Jr.">

    <title>Mesa Redonda - VI SACIC</title>

    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    
  </head>

  <body>
    <section>
      <div class="banner-mesas">
        <div class="banner-text">

          <div class="banner-heading-box">
            <h1 class="banner-heading"><span class="banner-span">Mesa</span></h1>
          </div>
          <div class="banner-heading-box2">
            <h1 class="banner-heading"><span class="banner-span">Redonda</span></h1>
          </div>
          <div class="banner-subtitle-box">
            <h4 class="banner-subtitle"><span class="banner-span">Informações Gerais</span></h4>
          </div>

        </div>

        <p class="banner-paragrafo">
          A VI SACIC contará com mesas redondas, onde serão discutidos assuntos relacionados à área da computação.
        </p>

      </div>
    </section>

    <section>

      <div class="container-fluid programacao-background">
        <div class="row text-center">

          <div class="col-md-4 col-sm-6 col-sm-offset-3 col-xs-12 col-md-offset-4">
            <br>
            <img class="programacao-avatar" src="img/pos-avatar.jpg" alt="Pós Graduação">
            <br>
            <h2 class="programacao-h2">Formei! E agora, faço pós ou não?</h2>
            <br><br>
            
            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#pos-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>

            <br>

          </div>

        </div>
      </div>

      <div class="container-agenda-data">
          <div class="row">
            
            <div class="text-center col-xs-12 agenda-data-col">
              <p class="inscricao-text">
                Clique no botão abaixo para ir para a página de inscrições
              </p>
            </div>
          </div>
      </div>


      <div class="programacao-background">
        <div class="row inscricao-row">

          <div class="programacao-background">
            <div class="row">
              <a class="inscricao-button" href="inscricoes.php">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 inscricao-box-caex">
                  <nobr>INSCREVA-SE</nobr>
                </div>
              </a>
            </div>
          </div>
          
        </div>
      </div>
      
    </section>
    
  </body>
<?php
    include 'footer.php';
    include 'mesas-modal.php';
?>
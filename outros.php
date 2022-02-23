<?php
  include 'header.php';
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Mesas redondas presentes na VI SACIC - Semana Acadêmica da Ciência da Computação da Unifal-MG.">
    <meta name="author" content="TriBit Jr.">

    <title>Outras Atividades - VI SACIC</title>

    <link rel="icon" type="image/ico" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    
  </head>

  <body>
    <section>
      <div class="banner-outros">
        <div class="banner-text">

          <div class="banner-heading-box">
            <h1 class="banner-heading"><span class="banner-span">Outras</span></h1>
          </div>
          <div class="banner-heading-box2">
            <h1 class="banner-heading"><span class="banner-span">Atividades</span></h1>
          </div>
          <div class="banner-subtitle-box">
            <h4 class="banner-subtitle"><span class="banner-span">Informações Gerais</span></h4>
          </div>

        </div>

        <p class="banner-paragrafo">
          Outras atividades presentes na programação da VI Semana Acadêmica da Ciência da Computação
        </p>

      </div>
    </section>

    <section>

      <div class="container-fluid programacao-background">

        <div class="row text-center">

          <div class="col-md-4 col-sm-6 col-xs-12">
            <br>
            <img class="programacao-avatar" src="img/futsal-avatar.jpg" alt="Futsal">
            <br>
            <h2 class="programacao-h2">Futsal</h2>
            <br><br>
            
            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#futsal-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>

            <br>

          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <br>
            <img class="programacao-avatar" src="img/queimada-avatar.jpg" alt="Queimada">
            <br>
            <h2 class="programacao-h2">Queimada</h2>
            <br><br>
            
            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#queimada-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>

            <br>

          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <br>
            <img class="programacao-avatar" src="img/esports-avatar.jpg" alt="E-sports">
            <br>
            <h2 class="programacao-h2">E-sports</h2>
            <br><br>
            
            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#esports-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>

            <br>

          </div>

          <div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
            <br>
            <img class="programacao-avatar" src="img/coffee-avatar.jpg" alt="Coffee Break">
            <br>
            <h2 class="programacao-h2">Coffee Break</h2>
            <br><br>
            
            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#coffee-modal">
                <div class="col-sm-6 col-sm-offset-3 inscricao-box">
                  <nobr>SAIBA MAIS</nobr>
                </div>
              </a>
            </div>

            <br>

          </div>

          <div class="col-md-4 col-sm-offset-3 col-md-offset-0 col-sm-6 col-xs-12">
            <br>
            <img class="programacao-avatar" src="img/churrasco-avatar.jpg" alt="Churrasco">
            <br>
            <h2 class="programacao-h2">Churrasco</h2>
            <br><br>
            
            <div class="row inscricao-row">
              <a class="modal-link" data-toggle="modal" data-target="#churrasco-modal">
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
    include 'outros-modal.php';
?>
<?php
include 'header.php';
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Agenda com as datas, horários e informações gerais sobre as atrações da VI SACIC - Semana Acadêmica da Ciência da Computação da Unifal-MG.">
  <meta name="author" content="TriBit Jr.">

  <title>Agenda - VI SACIC</title>

  <link rel="icon" type="image/ico" href="img/favicon.ico">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <section>

    <div class="container">

      <h1 class="programacao-title">Agenda</h1>
      <h4 class="programacao-subtitle">Programação completa - 06 a 11 de Novembro de 2017</h4>

      <hr align="center" width="100%" class="programacao-line">

    </div>

  </section>

  <div class="agenda-background">

    <div class="container">

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-header">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-8 agenda-paragrafo tabela-row agenda-header">DATA</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row">

            <div class="col-xs-6 col-md-2 agenda-border agenda-header">
              <p class="agenda-paragrafo tabela-row agenda-header">HORÁRIO</p>
            </div>
            <div class="col-xs-6 col-md-7 agenda-border agenda-header">
              <p class="agenda-paragrafo tabela-row agenda-header">EVENTO</p>
            </div>
            <div class="col-xs-12 col-md-3 agenda-border agenda-header">
              <p class="agenda-paragrafo tabela-row agenda-header">LINK</p>
            </div>
            
          </div>
        </div>

      </div>

      <!-- *******************************************segunda feira ******************************************** -->

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-date">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-4 agenda-number agenda-date">06</div>
              <div class="col-xs-12 col-lg-8 agenda-day agenda-date">Segunda-Feira</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Atividade Esportiva: Futsal</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#futsal-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">14:00 - 17:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Atividade Esportiva: Futsal</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#futsal-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>

           </div>
            
          </div>
        </div>

      <!-- *******************************************terça feira ******************************************** -->

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-date">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-4 agenda-number agenda-date">07</div>
              <div class="col-xs-12 col-lg-8 agenda-day agenda-date">Terça-Feira</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:00 - 18:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Credenciamento</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#credenciamento-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">18:00 - 19:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Abertura</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#abertura-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">19:00 - 21:30</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Palestra de abertura: Inovação, Empreendedorismo e a Universidade</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#inovacao-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
        </div>
        
      </div>

      <!-- *******************************************quarta feira ******************************************** -->

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-date">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-4 agenda-number agenda-date">08</div>
              <div class="col-xs-12 col-lg-8 agenda-day agenda-date">Quarta-Feira</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Competição de Programação</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#competicao-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Capture the Flag</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#capture-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 15:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Desafios e Iniciativas do Mundo Aberto - Keep calm and analyse your Open Data (Parte 1)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#opendata-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 15:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Web Design (Parte 1)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#web-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:00 - 15:30</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Coffee Break</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#coffee-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:30 - 16:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Mostra de Iniciação e TCC</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#mostra-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">16:00 - 18:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Desafios e Iniciativas do Mundo Aberto - Keep calm and analyse your Open Data (Parte 2)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#opendata-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">16:00 - 18:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Web Design (Parte 2)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#web-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">19:00 - 20:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Palestra: A Linguagem Go</p>
            </div>
            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#go-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>

          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">20:15 - 21:30</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Palestra: Desafios e Iniciativas do Mundo Aberto</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#mundoaberto-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>

		 </div>
        
        </div>
       </div>

      <!-- *******************************************quinta feira ******************************************** -->

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-date">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-4 agenda-number agenda-date">09</div>
              <div class="col-xs-12 col-lg-8 agenda-day agenda-date">Quinta-Feira</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Competição de Programação</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#competicao-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Capture the Flag</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#capture-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 15:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Data Science (Parte 1)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#datascience-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 15:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Git - Controle de Versões (Parte 1)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#git-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:00 - 15:30</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Coffee Break</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#coffee-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:30 - 16:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Mostra de Iniciação e TCC</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#mostra-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">16:00 - 18:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Data Science (Parte 2)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#datascience-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">16:00 - 18:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Git - Controle de Versões (Parte 2)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#git-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">19:00 - 20:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Palestra: Estudo, Empreendedorismo e Sucesso</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#estudo-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">20:15 - 21:30</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Palestra: Bitcoin - A Internet do Dinheiro</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#bitcoin-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>

       </div>
       </div>

        <!-- *******************************************sexta feira ******************************************** -->

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-date">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-4 agenda-number agenda-date">10</div>
              <div class="col-xs-12 col-lg-8 agenda-day agenda-date">Sexta-Feira</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Android (Parte 1)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#android-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Arduino (Parte 1)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#arduino-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 15:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Android (Parte 2)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#android-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 15:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Minicurso: Arduino (Parte 2)</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#arduino-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:00 - 15:30</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Coffee Break</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#coffee-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">15:30 - 16:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Mostra de Iniciação e TCC</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#mostra-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">16:00 - 18:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Mesa Redonda: Formei! E agora, faço pós ou não?</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#pos-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
           
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">19:00 - 23:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Churrasco</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#churrasco-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>

        </div>
        
      </div>

      <!-- ******************************************* sábado ******************************************** -->

      <div class="row flex-row tabela-row agenda-color">

        <div class="col-xs-12 col-sm-2 agenda-border agenda-date agenda-date">
            <div class="row flex-row">
              <div class="col-xs-12 col-lg-4 agenda-number agenda-date">11</div>
              <div class="col-xs-12 col-lg-8 agenda-day agenda-date">Sábado</div>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-10 tabela-row">
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Atividade Esportiva: Futsal</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#futsal-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time agenda-time">
              <p class="agenda-paragrafo agenda-time">09:00 - 12:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Atividade Esportiva: Queimada</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#queimada-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
          <div class="row flex-row">

            <div class="col-xs-3 col-md-2 agenda-border agenda-time">
              <p class="agenda-paragrafo agenda-time">13:00 - 16:00</p>
            </div>
            <div class="col-xs-9 col-md-7 agenda-border">
              <p class="agenda-paragrafo">Atividade Esportiva: E-Sports</p>
            </div>

            <div class="agenda-border col-xs-12 col-sm-12 col-md-3 agenda-link" data-toggle="modal" data-target="#esports-modal">
              <nobr class="saibamais-text">SAIBA MAIS</nobr>
            </div>
            
          </div>
        </div>
        
      </div>
	</div>
</div>

</body>
<?php
  include 'footer.php';
  include 'palestras-modal.php';
  include 'mesas-modal.php';
  include 'minicursos-modal.php';
  include 'outros-modal.php';
  include 'desafios-modal.php';
?>
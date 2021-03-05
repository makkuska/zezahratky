<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "kontakty" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>ZE-ZA-HRÁTKY | Kontakty</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="kontakty container">
      <?php include_once("header.html") ?>
        <div id="first">

          <div id="kontakty" class="container container-padding">
            <h1 class="page-header">Kontakty</h1>
              <div class="row">
                  <div class="col-lg-5 col-lg-offset-1 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
                    <h2 class="">Prodej trh a restaurace</h2>
                    <address>
                      <dl class="dl-horizontal">
                        <dt>kontaktní osoba</dt>
                        <dd><strong>Mgr. Petr Gola</strong></dd>
                        <dt>mobil</dt>
                        <dd>+420 728 402 812</dd>
                        <dt>e-mail</dt>
                        <dd>petrgola@seznam.cz</dd>
                        <dt>ič</dt>
                        <dd>88004716</dd>
                      </dl>
                    </address>
                  </div>
            
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="">Bedýnkový systém</h2>
                    <address>
                      <dl class="dl-horizontal">
                        <dt>kontaktní osoba</dt>
                        <dd><strong>Ladislav Dobrý</strong></dd>
                        <dt>mobil</dt>
                        <dd>+420 797 639 330</dd>
                        <dt>e-mail</dt>
                        <dd>info@zezahratky.cz</dd>
                        <dt>ič</dt>
                        <dd>05120250</dd>
                      </dl>
                    </address>
                  </div>
                </div>
              <div class="row">
                <div id="sidlo" class="container">
                   <!--
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <address>
                      <dl class="dl-horizontal">
                        <dt>kontaktní osoba</dt>
                        <dd><strong>Mgr. Petr Gola</strong></dd>
                        <dt>sídlo firmy</dt>
                        <dd>Metodějská 277/5</dd>
                        <dt></dt>
                        <dd>779 00 Olomouc</dd>
                        <dt>ič</dt>
                        <dd>88004716</dd>
                        <dt><br /></dt>
                        <dd><br /></dd>
                        <dt>mobil</dt>
                        <dd>+420 608 229 543</dd>
                        <dt>e-mail</dt>
                        <dd>info@zezahratky.cz</dd>
                      </dl>
                    </address>
                  </div>
                   -->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php include_once("kontakt_nas.html") ?> 
                  </div><!-- div sidlo  class="container"-->
                </div><!-- div sidlo-->
              </div><!-- div sidlo  class="container"-->

          </div><!-- div kontakty -->

          <?php include_once("mapa.html") ?>
          <?php include_once("footer.html") ?>

      </div> <!-- id="first" -->
    </div> <!-- id="box" class="container" -->
  </body> 
</html>

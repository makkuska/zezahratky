<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "reference" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>ZE-ZA-HRÁTKY | Reference</title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    <div id="box" class="container">
      <?php include_once("header.html") ?>
      <div id="first">
      
        <div id="reference" class="container container-padding">
          <h1 class="page-header">Reference</h1>

          <h4>
          Máme tu čest rozvážet naši zeleninu do olomouckých restaurací a obchodů. 
          </h4>
          <br />

          <h2 class="text-center" >Kde koupíte naši zeleninu?</h2>
            <div class="row">
              <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-12 col-xs-12">
                <a target="_blank" href="http://www.zivybar.cz/" class="ref_logo ref_logo_zivibar">
              </a>
              </div>
            </div>
          <br />

          <h2 class="text-center">Kde jíte naši zeleninu?</h2>
            <div class="row">
              <div class="col-lg-2 col-lg-offset-2 col-md-offset-2 col-md-2 col-sm-12 col-xs-12">
                <a target="_blank" href="http://www.pivochomout.cz/" class="ref_logo ref_logo_chomout">
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a target="_blank" href="http://www.rozmaryny.cz/" class="ref_logo ref_logo_rozmaryny">
                </a>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a target="_blank" href="https://www.facebook.com/Bistro-U-PANA-LILKA-1216260111724783/" class="ref_logo ref_logo_panalilka">
                </a>
              </div>
            </div>
            <br /> 
            <div class="row">
              <div class="col-lg-2 col-lg-offset-2 col-md-offset-2 col-md-2 col-sm-12 col-xs-12">
                <a target="_blank" href="http://bistrakrava.blogspot.cz/" class="ref_logo ref_logo_bistrakrava">
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a target="_blank" href="http://www.zivazahradaolomouc.cz/" class="ref_logo ref_logo_zivazahrada">
                </a>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <a target="_blank" href="http://www.zivybar.cz/" class="ref_logo ref_logo_zivibar">
                </a>
              </div>
            </div>
          </div>

          <div id='mapa_ref'></div>
          <?php include_once("mapa_ref.html") ?>

        </div>
        <?php include_once("footer.html") ?>
      </div> <!-- id="box" class="container" -->
    </div> <!-- id="first" class="container" -->
  </body> 
</html>

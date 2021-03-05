<!DOCTYPE html>
<html lang="cs-cz" dir="ltr">
  <?php $name_page = "odhlaseni" ?>
  <?php $rootpath = "../" ?>
  <?php $czpath = "" ?>
  <?php $enpath = "../en/" ?>
  <?php $depath = "../de/" ?>
  <?php $filespath = "../" ?>
  <head>
    <meta charset="UTF-8" />
    <?php include_once("../head.html") ?>
    <title>ZE-ZA-HRÁTKY </title>
  </head>
  
  <body>

    <!--[if lt IE 9]>
      <script src="../files/js/html5shiv.js"></script>
      <script src="../files/js/respond.min.js"></script>
    <![endif]-->

    
    <div id="box" style="background-color: #CDC27B; padding:30px" class="container">
      <div id="first" class="container">
      
        <div class="text-center col-md-offset-2 col-lg-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img alt="fblogo" class="" src=<?php echo "{$filespath}files/img/ikona_zel.png" ?> /> 
            <form ACTION=<?php echo "{$czpath}admin_delete_mail.php" ?> METHOD="post" class="form-horizontal" role="form">
              <input class="hidden" type="text" name="url" id="url" />
              <h5>Pokud si již nepřejete dostávat e-maily s aktuálními informace, napiště svůj e-mail. Děkujeme.</h5>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" name="mail_smazat" 
                    id="mail" size="30" maxlength="30" 
                    class="form-control" placeholder="zadejte email" 
                    required />
                  </div>
                </div>
                <p>
                <div class="col-md-2 col-lg-offset-5 col-md-offset-5 col-lg-2 col-sm-4 col-xs-7 ">
                    <input type="submit" value="Odeslat" class="btn btn-success" />
                </div>
                </p>
            </form>
        </div>

    </div> <!-- id="first" class="container" -->

  </body> 
</html>

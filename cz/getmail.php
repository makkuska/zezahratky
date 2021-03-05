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
        <div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <img alt="fblogo" class="" src=<?php echo "{$filespath}files/img/ikona_zel.png" ?> /> 
            </div>
        <div class="col-md-offset-2 col-lg-offset-2 col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h1>Administrace</h1>
        <ul><li>> získat emaily</li>
          <li><a href=<?php echo "admin_event_db.php" ?>> editovat aktuality</a></li>
        </ul>
            </div>
      
        <div class="text-center col-md-offset-4 col-lg-offset-4 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <form ACTION=<?php echo "{$czpath}admin_get_mail.php" ?> METHOD="post" class="form-horizontal" role="form">
              <input class="hidden" type="text" name="url" id="url" />
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">   
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input name="getmail" 
                    id="mail" size="30" maxlength="30" 
                    class="form-control" placeholder="získat maily" 
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

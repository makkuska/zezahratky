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
        <ul><li><a href=<?php echo "getmail.php" ?>> získat emaily</a></li>
            <li>> editovat aktuality</li>
        </ul>
            </div>
  <?php 
    include_once("admin_select_event.php"); 
  ?>

        <div class="text-center col-md-offset-1 col-lg-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <form class="form-horizontal" action="admin_add_event.php" method="post">
            <div class="form-group">
              <label class="hidden" for="id">id: </label> 
              <input id="id" class="form-control hidden" type="text" name="id">
            </div>
            <div class="form-group">
              <label for="date" class="col-lg-3 control-label">datum: </label> 
              <div class="col-lg-9">
                <input id="date" class="form-control" type="date" name="date" required>
              </div>
            </div>
            <div class="form-group">
              <label for="subject_cz" class="col-lg-3 control-label">nadpis: </label> 
              <div class="col-lg-9">
                <input id="subject_cz" class="form-control" type="text" name="subject_cz" required>
              </div>
            </div>
            <div class="form-group">
              <label for="frm-text" class="col-lg-3 control-label">zpráva: </label> 
              <div class="col-lg-9">
                <textarea id="frm-text" class="form-control" name="message_cz" placeholder="text aktuality" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="frm-text" class="col-lg-3 control-label"> </label> 
              <div class="col-lg-3">
                <input id="frm-text" type="password" class="form-control" name="heslo" placeholder="heslo" required>
              </div>
              <div class="col-lg-3">
                <input class="btn btn-info" type="submit" value="Vložit aktualitu">
                <input type="hidden" name="url" value="http://">
              </div>
            </div>
            </form>
          </div>
        </div>

          <div class="col-lg-12 col-md-12">

            <?php

              echo "<p>Dnes je " . date("l") . ' ' . date('d.m.Y'). '.</p>';

          while($row = mysql_fetch_array($result_event)){   //Creates a loop to loop through results
            $output = "<form action='admin_update_event.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='date' class='col-lg-3 control-label'>datum: </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='date' class='form-control' type='date' min='2016-01-01' name='date' value='" . $row['date'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='subject_cz' class='col-lg-3 control-label'>nadpis: </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='subject_cz' class='form-control' type='text' name='subject_cz' value='" . $row['subject_cz'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='message_cz' class='col-lg-3 control-label'>zpráva: </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<textarea id='message_cz' class='form-control' name='message_cz' >" . $row['message_cz'] . "</textarea>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='heslo' class='col-lg-3 control-label'> </label>";
              $output .= "<div class='col-lg-3'>";
                $output .= "<input id='heslo' placeholder='heslo' class='form-control' type='password' name='heslo' value='" . $row['heslo'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='col-lg-6'>";
              $output .= "<input class='btn btn-success' type='submit' value='Upravit'>";
            $output .= "</div>";
            $output .= "</form>";

            $output .= "<form action='admin_delete_event.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='heslo' class='col-lg-3 control-label'> </label>";
              $output .= "<div class='col-lg-3'>";
                $output .= "<input id='heslo' placeholder='heslo' class='form-control' type='password' name='heslo' value='" . $row['heslo'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
              $output .= "<div class='col-lg-6'>";
                $output .= "<input id='delete_button' class='btn btn-warning' type='submit' value='Smazat'><br /><br />";
              $output .= "</div>";
            $output .= "</form>";
            $output .= "";
            echo $output;
          }

          mysql_close($dbhandle);

            ?>
          </div>
      </div>
    </div>
  </body>
  </html>


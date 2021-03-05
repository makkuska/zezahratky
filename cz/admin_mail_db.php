<!DOCTYPE html>
  <?php $name_page = "" ?>
  <?php $name_page_en = "" ?>
  <?php $folder = "" ?>
  <?php $files = "../" ?>
  <?php 
    include_once("page_up_content.html");
    include_once("admin_select_event.php"); 
  ?>

    <div id="admin" class="hlavni container"> 
      <div class="row container">
        <h1>Administrator</h1>

        <h2><span class="active">Add event</span> | <a href="admin_menu_db.php">Add meal</a></h2>
        <div class="row">
          <div class="col-lg-11 col-md-11">
            <form class="form-horizontal" action="admin_add_event.php" method="post">
            <div class="form-group">
              <label class="hidden" for="id">id: </label> 
              <input id="id" class="form-control hidden" type="text" name="id">
            </div>
            <div class="form-group">
              <label for="date" class="col-lg-3 control-label">date: </label> 
              <div class="col-lg-9">
                <input id="date" class="form-control" type="date" name="date" required>
              </div>
            </div>
            <div class="form-group">
              <label for="subject_en" class="col-lg-3 control-label">subject: </label> 
              <div class="col-lg-9">
                <input id="subject_en" class="form-control" type="text" name="subject_en" required>
              </div>
            </div>
            <div class="form-group">
              <label for="frm-text" class="col-lg-3 control-label">message: </label> 
              <div class="col-lg-9">
                <textarea id="frm-text" class="form-control" name="message_en" placeholder="text" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="subject_cz" class="col-lg-3 control-label">subject (in CZECH): </label> 
              <div class="col-lg-9">
                <input id="subject_cz" class="form-control" type="text" name="subject_cz" required>
              </div>
            </div>
            <div class="form-group">
              <label for="frm-text" class="col-lg-3 control-label">message (in CZECH): </label> 
              <div class="col-lg-9">
                <textarea id="frm-text" class="form-control" name="message_cz" placeholder="text" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-9 col-lg-offset-3">
                <input class="btn btn-info" type="submit" value="Add event">
                <input type="hidden" name="url" value="http://">
              </div>
            </div>
            </form>
          </div>
        </div>

          <div class="col-lg-12 col-md-12">

            <?php

              echo "<p>Today is " . date("l") . ' ' . date('d.m.Y'). '.</p>';

          while($row = mysql_fetch_array($result_event)){   //Creates a loop to loop through results
            $output = "<form action='admin_update_event.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='date' class='col-lg-3 control-label'>date </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='date' class='form-control' type='date' min='2016-01-01' name='date' value='" . $row['date'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='subject_en' class='col-lg-3 control-label'>subject: </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='subject_en' class='form-control' type='text' name='subject_en' value='" . $row['subject_en'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='message_en' class='col-lg-3 control-label'>message: </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='message_en' class='form-control' type='text' name='message_en' value='" . $row['message_en'] . "'></textarea>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='subject_cz' class='col-lg-3 control-label'>subject (in CZECH): </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='subject_cz' class='form-control' type='text' name='subject_cz' value='" . $row['subject_cz'] . "'>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
              $output .= "<label for='message_cz' class='col-lg-3 control-label'>message (in CZECH): </label>";
              $output .= "<div class='col-lg-9'>";
                $output .= "<input id='message_cz' class='form-control' type='text' name='message_cz' value='" . $row['message_cz'] . "'></textarea>";
              $output .= "</div>";
            $output .= "</div>";
            $output .= "<div class='col-lg-9 col-lg-offset-3'>";
              $output .= "<input class='btn btn-success' type='submit' value='Update'>";
            $output .= "</div>";
            $output .= "</form>";

            $output .= "<form action='admin_delete_event.php' method='post'>";
            $output .= "<input class='hidden' type='text' name='id' value='" . $row['id'] . "'>";
              $output .= "<div class='col-lg-9 col-lg-offset-3'>";
                $output .= "<input id='delete_button' class='btn btn-warning' type='submit' value='Delete'>";
              $output .= "</div>";
            $output .= "</form>";
            $output .= "<span class='skryty'>blaaa</span>";
            echo $output;
          }

          mysql_close($dbhandle);

            ?>
          </div>
      </div>
    <?php include_once("paticka.html") ?>
    </div>
  </body>
  </html>


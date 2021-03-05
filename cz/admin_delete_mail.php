
    <meta http-equiv="refresh" content="0;url=http://new.zezahratky.cz/">
          <?php

          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $mail = $_POST['mail_smazat'];

          $insert = "DELETE FROM emaily WHERE email = '$mail'";

          if ($conn->query($insert) === TRUE) {
              echo "Váš e-mail byl odebrán. Děkujeme!";
          } else {
              echo "Error: " . $insert . "<br>" . $conn->error;
          }

          ?>

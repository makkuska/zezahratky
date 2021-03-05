    <meta http-equiv="refresh" content="0;url=http://zezahratky.cz/">
          <?php

          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $mail = $_POST['mail'];

          $insert = "INSERT INTO emaily (email) VALUES ('$mail')";

          if ($conn->query($insert) === TRUE) {
              echo "Váš e-mail byl přidán. Děkujeme!";
          } else {
              echo "Error: " . $insert . "<br>" . $conn->error;
          }

          ?>

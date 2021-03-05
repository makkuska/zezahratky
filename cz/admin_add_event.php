
          <?php

          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $date = $_POST['date'];
          $subject_cz = $_POST['subject_cz'];
          $message_cz = $_POST['message_cz'];

          $heslo = $_POST['heslo'];

          $insert = "INSERT INTO events (date, subject_cz, message_cz) VALUES ('$date', '$subject_cz', '$message_cz')";

          if ($heslo == 'be_246') {
            if ($conn->query($insert) === TRUE) {
                echo "Record was updated successfully ";
            } else {
                echo "Error: " . $insert . "<br>" . $conn->error;
            }
          } else {
            echo "nesprávné heslo";
          }

          ?>
<meta http-equiv="refresh" content="0;url=http://zezahratky.cz/cz/admin_event_db.php">

<meta http-equiv="refresh" content="0;url=http://zezahratky.cz/cz/admin_event_db.php">
          <?php

          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $date = $_POST['date'];
          $heslo = $_POST['heslo'];
          $subject_cz = $_POST['subject_cz'];
          $subject_en = $_POST['subject_en'];
          $message_cz = $_POST['message_cz'];
          $message_en = $_POST['message_en'];

          $update = "UPDATE events SET date='$date', subject_cz='$subject_cz', message_cz='$message_cz' WHERE id=$id";

          if ($heslo == 'be_246') {
            if ($conn->query($update) === TRUE ) {
                echo "Record was updated successfully ";
            } else {
                echo "Error: " . $update . "<br>" . $conn->error;
            }
          } else {
            echo "nesprávné heslo";
          }

          $conn->close();

          ?>

<meta http-equiv="refresh" content="0;url=http://zezahratky.cz/cz/admin_event_db.php">
          <?php
  
          include_once("admin_dbconnection.php");

          $id = $_POST['id'];
          $heslo = $_POST['heslo'];

          $delete = "DELETE FROM events WHERE id=$id";

          if ($heslo == 'be_246') {
            if ($conn->query($delete) === TRUE) {
                echo "Record was updated successfully ";
            } else {
                echo "Error: " . $delete . "<br>" . $conn->error;
            }
          } else {
            echo "nesprávné heslo";
          }

          $conn->close();

          ?>

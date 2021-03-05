
          <?php

          include_once("admin_dbconnection.php");

          $form_email = $_POST['getmail'];

          $sql = "SELECT $form_email FROM emaily";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo $row["email"]. "; ";
              }
          } else {
              echo "0 results";
          }

          $conn->close();



          ?>

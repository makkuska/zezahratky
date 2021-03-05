
          <?php
          $servername = "wm96.wedos.net";
          $username = "w113755_prodej";
          $password = "V6ww5ttD";
          $dbname = "d113755_prodej";
  

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 
          ?>

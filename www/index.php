<html>
    <button id="BTN"style="padding: 0px;margin: 0;">Show Quizes</button>
    <div class="main_container">
        <div class="sub_container">

          </div>
        <div class="info"></div>
    </div>
    <script src="view/behaviour.js"></script>
</html>

<?php
//test connection
/*
 $host = 'db';
     $db_name = 'quizdb';
     $username = 'root';
     $password = 'test';
     $conn;
  $conn = null;


      try { 
        $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "done";

      } catch(PDOException $e) {

        echo 'Connection Error: ' . $e->getMessage();
      }
      $query = 'SELECT * FROM  quiz  ';
      // Prepare statement
      $stmt = $conn->prepare($query);

      // Execute query
      $stmt->execute();
      $num = $stmt->rowCount();
      echo $num;
    echo "hiiyyyyyyyad";
    */
    echo date('Y-m-d H:m');

?>
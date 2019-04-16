<?php 
  class Post {
    // DB stuff
    private $conn;

    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
    //  $query = 'SELECT * FROM  Quiz  c JOIN question p ON p.QID = c.QuizId';
       $query = 'SELECT * FROM  Quiz  ';
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

   public function read_single() {
          // Create query
      //    $query = 'SELECT * from question where QID=?';
       // echo $QID;
      $query = 'SELECT * FROM  question p  LEFT JOIN Quiz  c ON p.QID = c.QuizId WHERE  P.QID = ?';

                                    
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->QID);

          // Execute query
          $stmt->execute();
          return $stmt ;
    }

  }
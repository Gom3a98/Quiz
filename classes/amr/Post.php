<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'posts';

    // Post Properties
    public $QuizId;
    public $QuizTitle;
    public $QuizDescription;
    public $TotalScore;
    public $Duration;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * from Quiz';
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

   public function read_single() {
          // Create query
          $query = 'SELECT * from Quiz where QuizId=?';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->QuizId);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->QuizId = $row['QuizId'];
          $this->QuizTitle = $row['QuizTitle'];
          $this->QuizDescription = $row['QuizDescription'];
          $this->TotalScore = $row['TotalScore'];
          $this->Duration = $row['Duration'];
    }

  }
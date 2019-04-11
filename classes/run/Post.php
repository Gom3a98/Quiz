<?php 
  class Post {
    // DB stuff
    private $conn;
  //  private $table = 'question';

    // Post Properties
     
    public $QuizId;
    public $QuizTitle;
    public $QuizDescription;
    public $TotalScore;
    public $Duration;

    public $QID ;
    public $QuestId;
    public $Quetion ;
    public$Valid ;
    public$FakeAns1  ;
    public$FakeAns2 ;
    public$FakeAns3  ;
    
   // Constructor with DB
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
     //     $query = 'SELECT * from question where QID=?';
      
      $query = 'SELECT * FROM  Quiz  c JOIN question p ON p.QID = c.QuizId WHERE  c.QuizId = ?';

                                    
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->QuizId);

          // Execute query
          $stmt->execute();
          return $stmt ;
    }

  }
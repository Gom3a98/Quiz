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
    public $QId ;
    public $QuestId;
    public $Quetion ;
    public$Valid ;
    public$FakeAns1  ;
    public$FakeAns2 ;
    public$FakeAns3  ;
    public $Rate;
    public $Numof_participant;
    public $CompanyId;
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


     public function update() {
        $query = 'UPDATE   quiz SET  Rate= :Rate + Rate , Numof_participant = Numof_participant +1  WHERE QuizId = :QuizId';

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Clean data
            $this->Rate = htmlspecialchars(strip_tags($this->Rate));
             $this->QuizId = htmlspecialchars(strip_tags($this->QuizId));

            $stmt->bindParam(':Rate', $this->Rate);
            $stmt->bindParam(':QuizId', $this->QuizId);

            // Execute query
            if($stmt->execute()) {
              return true;
            }

            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);

            return false;
            
      }

  }
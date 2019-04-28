<?php

require_once('DB_Access.php');

class AdminAccess extends DB_Access
{

    public $quiz;
    private $database;

    public function __construct($DB)
    {
        $this->database = $DB;
        $this->quiz = new QuizDB();
    }

    public function CreateQuiz($id, $t, $d, $p, $dur)
    {

        $this->quiz->setId($id);
        $this->quiz->setDescriptioin($d);
        $this->quiz->setDuration($dur);
        $this->quiz->setPoints($p);
        $this->quiz->setTitle($t);
        if ($this->StoreQuiz()) {

            return true;
        } else {
            return false;
        }
    }

    public function StoreQuiz()
    {
        // Create query
        $query = 'INSERT INTO quiz' . ' SET QuizId = :QuizId, QuizTitle = :QuizTitle, QuizDescription = :QuizDescription
                                        , TotalScore = :TotalScore, Duration = :Duration';
        // Prepare statement

        $stmt = $this->database->prepare($query);
        // Bind data
        $stmt->bindParam(':QuizId', $this->quiz->getId());
        $stmt->bindParam(':QuizTitle', $this->quiz->getTitle());
        $stmt->bindParam(':QuizDescription', $this->quiz->getDescriptioin());
        $stmt->bindParam(':TotalScore', $this->quiz->getPoints());
        $stmt->bindParam(':Duration', $this->quiz->getDuration());

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }

    public function InsertQuistions($qid, array $quis)
    {
        $x = null;
        connect($x);
        for ($i = 0; $i < 50; $i += 5) {

            $r = rand(1, 10000);
            $t = "insert into question (QId,QuestId,Quetion,Valid,FakeAns1,FakeAns2,FakeAns3)values 
                ('$qid','$r','{$quis[$i]}','{$quis[$i+1]}','{$quis[$i+2]}','{$quis[$i+3]}','{$quis[$i+4]}')
                
                ";

            mysql_query($t);
        }

        DisConnect($x);
    }

    public function DeleteQuiz($id)
    {
        // Create query
        $query = 'DELETE FROM quiz' . ' WHERE QuizId = :id';

        // Prepare statement
        $stmt = $this->database->prepare($query);

        // Clean data
        $id = htmlspecialchars(strip_tags($id));

        // Bind data
        $stmt->bindParam(':id', $id);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }

    public function UpdateQuiz($id, $t, $d, $p, $dur)
    {
        $x = null;
        connect($x);
        $t = "UPDATE quiz SET QuizTitle='$t' , QuizDescription='$d' , TotalScore= '$p' , Duration ='$dur' WHERE QuizId ='$id'  ";
        mysql_query($t);

    }


  public function GetQuizByCompanyId($CompanyId) {

      $query = 'SELECT * FROM   Quiz   WHERE  CompanyId = ?';

          // Prepare statement
          $stmt = $this->database->prepare($query);
          // Bind ID
          $stmt->bindParam(1, $CompanyId);
          // Execute query
          $stmt->execute();
          return $stmt ;
    }
}
 /* end of class AdminAccess */

?>


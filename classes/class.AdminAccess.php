<?php

require_once('DB_Access.php');


class AdminAccess extends DB_Access
{

    public $quiz;
    public function __construct()
    {

        $this->quiz = new QuizDB();
    }
    public function CreateQuiz($id,$t,$d,$p,$dur)
    {

        $this->quiz->setId($id);
        $this->quiz->setDescriptioin($d);
        $this->quiz->setDuration($dur);
        $this->quiz->setPoints($p);
        $this->quiz->setTitle($t);
        if($this->StoreQuiz())
        {

            return true;
        }
        else
            {
                echo "<script>alert('Dad')</script>";
                return false;
            }
    }
    public function StoreQuiz()
    {
        $con = null;
        connect($con);

        $obj = "insert into quiz (QuizId,QuizTitle,QuizDescription,TotalScore,Duration) values 
                ('{$this->quiz->getId()}','{$this->quiz->getTitle()}','{$this->quiz->getDescriptioin()}',
                '{$this->quiz->getPoints()}','{$this->quiz->getDuration()}')";
        echo $obj;
        if(mysql_query($obj)) {

            DisConnect($con);
            return true;
        }
        else{

            echo "<script>alert('Kemo')</script>";
            return false;

        }

    }
    public function InsertQuistions($qid,array $quis)
    {
        $x= null;
        connect($x);
        for($i=0;$i<50;$i+=5) {

            $r =rand(1,10000);
            $t = "insert into question (QId,QuestId,Quetion,Valid,FakeAns1,FakeAns2,FakeAns3)values 
                ('$qid','$r','{$quis[$i]}','{$quis[$i+1]}','{$quis[$i+2]}','{$quis[$i+3]}','{$quis[$i+4]}')
                
                ";

            mysql_query($t);
        }

        DisConnect($x);
    }

    public function DeleteQuiz($id)
    {
       $x= null;
       connect($x);
       $t = "DELETE FROM quiz WHERE QuizId = $id";
       mysql_query($t);
        $t = "DELETE FROM question WHERE QId = $id";
        mysql_query($t);
       DisConnect($x);
    }
    public function UpdateQuiz($id,$t,$d,$p,$dur)
    {
        $x= null;
       connect($x);
       $t="UPDATE quiz SET QuizTitle='$t' , QuizDescription='$d' , TotalScore= '$p' , Duration ='$dur' WHERE QuizId ='$id'  ";
       mysql_query($t);
       
    }
public function read() {
      $x= null;

       connect($x);
      $query = 'SELECT * from Quiz';
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
}
 /* end of class AdminAccess */

?>


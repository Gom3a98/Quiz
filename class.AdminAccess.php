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
        /*
        $qui = "INSERT INTO `quiz`( `QuizId`,`QuizTitle`, `QuizDescription`, `TotalScore`, `Duration`)VALUES
        ({$this->quiz->getId()},{$this->quiz->getTitle()},{$this->quiz->getDescriptioin()},
         {$this->quiz->getPoints()},{$this->quiz->getDuration()})";
*/
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

    public function DeleteQuiz($id)
    {
        // section -64--88-1-105--36b75c84:169dad6bb7a:-8000:0000000000000B32 begin
        // section -64--88-1-105--36b75c84:169dad6bb7a:-8000:0000000000000B32 end
    }

    public function UpdateQuiz($id)
    {
        // section -64--88-1-105--36b75c84:169dad6bb7a:-8000:0000000000000B34 begin
        // section -64--88-1-105--36b75c84:169dad6bb7a:-8000:0000000000000B34 end
    }


} /* end of class AdminAccess */

?>


<?php

require_once('QuizDB.php');
//require_once('../Control/Connection.php');
include 'Connection.php';
class DB_Access
{

    public $QuizDB;
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
    public function GetAllQuiz()
    {
        $con  =null;
        connect($con);
        $q=mysql_query("select * from quiz");
        DisConnect($con);
        return $q;

    }
     public function read_single() {
          // Create query
               $query = 'SELECT * FROM  question  p JOIN quiz c ON p.QID = c.QuizId WHERE  p.QID = ?';

                                    
          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->QID);

          // Execute query
          $stmt->execute();
          return $stmt ;
    }
}
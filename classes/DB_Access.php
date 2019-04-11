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
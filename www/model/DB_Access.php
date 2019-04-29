<?php

require_once('QuizDB.php');
require_once ('Connection.php');
class DB_Access
{
    private $id ;
    private $conn;

    public function __construct($db) {

        $this->conn = $db;
    }
    public function GetLogs()
    {
        $query = 'SELECT * FROM  logs  ';
        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }
    public function GetAllQuiz()
    {
        $con  =null;
        connect($con);
        $q=mysql_query("select * from quiz");
        DisConnect($con);
        return $q;

    }
     public function read_single($id) {
         $this->id = $id;
       //  $query = 'SELECT * FROM  question p  LEFT JOIN quiz  c ON p.QID = c.QuizId WHERE  P.QID = :QuizId ';
         $query = 'SELECT * FROM  quiz c  LEFT JOIN question  p ON p.QID = c.QuizId WHERE  c.QuizId = :QuizId ';
          //  $query = 'SELECT * FROM  quiz where QuizId= :QuizId ';
         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(':QuizId', $this->id);

         // Execute query
         $stmt->execute();

         return $stmt ;
    }
}
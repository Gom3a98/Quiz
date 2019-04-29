<?php

require_once('QuizDB.php');
require_once ('Connection.php');
class DB_Access
{
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

         $query = 'SELECT * FROM  Quiz  c  LEFT JOIN  question p ON p.QID = c.QuizId WHERE  c.QuizId = :QuizId';

         $stmt = $this->conn->prepare($query);

         $stmt->bindParam('QuizId', $id);

         // Execute query
         $stmt->execute();

         return $stmt ;
    }
}
<?php

require_once('QuizDB.php');
require_once('Connection.php');
class DB_Access
{

    public $QuizDB;

    public function GetAllQuiz()
    {
        $con  =null;
        connect($con);
        $q=mysql_query("select * from quiz");
        DisConnect($con);
        return $q;

    }
}
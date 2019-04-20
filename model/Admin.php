<?php

require_once('class.AdminAccess.php');

class admin
{
    private $manage;
    public function __construct()
    {
        $this->manage = new AdminAccess();
    }

    public function AddQuiz($id,$tit,$des,$points,$dur)
    {
        if( $this->manage->CreateQuiz($id,$tit,$des,$points,$dur))
            return true;


    }
    public function DeleteQuiz($id)
    {
        $this->manage->DeleteQuiz($id);

    }
    public function UpdataQuiz($id,$t,$d,$p,$dur)
    {
        $this->manage->UpdateQuiz($id,$t,$d,$p,$dur);

    }
    public function ShowRate($id)
    {

    }
    public function GetQuize($id)
    {
        $con  =null;
        connect($con);
        $q=mysql_query("select * from quiz where QuizId = $id");
        DisConnect($con);
        return $q;
    }


} /* end of class admin */

?>
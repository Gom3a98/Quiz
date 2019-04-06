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

        $this->manage->CreateQuiz($id,$tit,$des,$points,$dur);

    }
    public function DeleteQuiz($id)
    {
        $this->manage->DeleteQuiz($id);

    }
    public function UpdataQuiz($id)
    {

    }
    public function ShowRate($id)
    {

    }
    public function GetQuize($id)
    {

    }


} /* end of class admin */

?>
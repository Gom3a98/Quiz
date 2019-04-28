<?php

require_once('class.AdminAccess.php');
require_once ('logger.php');

class admin
{
    private $manage;
    public function __construct($DB)
    {

        $this->manage = new AdminAccess($DB);
    }

    public function AddQuiz($id,$tit,$des,$points,$dur)
    {
        if( $this->manage->CreateQuiz($id,$tit,$des,$points,$dur))
            return true;


    }
    public function DeleteQuiz($id)
    {
        if($this->manage->DeleteQuiz($id))
                return true;
        return false;

    }
    public function UpdataQuiz($id,$t,$d,$p,$dur)
    {
        $this->manage->UpdateQuiz($id,$t,$d,$p,$dur);

    }
    public function GetQuizByCompanyId($companyId)
    {

       return $this->manage->GetQuizByCompanyId($companyId);
    }


} /* end of class admin */

?>
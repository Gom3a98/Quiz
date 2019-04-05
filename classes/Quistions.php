<?php
class Quistion
{

    private $Quistion = null;
    private $QuizId;
    private $Answers = array();
    private $ValidAnswer = null;

    public function __construct($Quistion, $QuisId, array $Answers, $ValidAnswer)
    {
        $this->Quistion = $Quistion;
        $this->QuisId = $QuisId;
        $this->Answers = $Answers;
        $this->ValidAnswer = $ValidAnswer;
    }
    /**
     * @param null $Quistion
     */
    public function setQuistion($Quistion)
    {
        $this->Quistion = $Quistion;
    }

    /**
     * @param mixed $QuisId
     */
    public function setQuisId($QuisId)
    {
        $this->QuisId = $QuisId;
    }

    /**
     * @param array $Answers
     */
    public function setAnswers($Answers)
    {
        $this->Answers = $Answers;
    }

    /**
     * @param null $ValidAnswer
     */
    public function setValidAnswer($ValidAnswer)
    {
        $this->ValidAnswer = $ValidAnswer;
    }

    /**
     * @return null
     */
    public function getQuistion()
    {
        return $this->Quistion;
    }

    /**
     * @return mixed
     */
    public function getQuisId()
    {
        return $this->QuisId;
    }

    /**
     * @return array
     */
    public function getAnswers()
    {
        return $this->Answers;
    }

    /**
     * @return null
     */
    public function getValidAnswer()
    {
        return $this->ValidAnswer;
    }

}
?>
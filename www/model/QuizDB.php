<?php
require_once ("Quistions.php");
class quizDB
{

    private $questions = array();
    private $title = '';
    private $Descriptioin;
    private $points = null;
    private $duration = null;
    private $id = null;

    public function getDescriptioin()
    {
        return $this->Descriptioin;
    }

    /**
     * @param mixed $Descriptioin
     */
    public function setDescriptioin($Descriptioin)
    {

        $this->Descriptioin = htmlspecialchars(strip_tags($Descriptioin));
    }
    public function __construct()
    {
        $this->questions=array(new Quistion(null,null,array(),null)); // suppose it array of Objects
    }

    public function setId($id)
    {

        $this->id = htmlspecialchars(strip_tags($id));
    }
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param string $questions
     */
    public function setQuestions($questions)
    {
        $this->questions = htmlspecialchars(strip_tags($questions));
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = htmlspecialchars(strip_tags($title));
    }

    /**
     * @return null
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param null $points
     */
    public function setPoints($points)
    {
        $this->points =htmlspecialchars(strip_tags($points));
    }

    /**
     * @return null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = htmlspecialchars(strip_tags($duration));
    }

} /* end of class quizDB */

?>
<?php

require_once '../../../api/Database.php';
require_once '../../../model/Admin.php';
require_once '../../../model/DB_Access.php';
class AdminTest extends \PHPUnit_Framework_TestCase
{

    public function testAddingNewQuiz()
    {
        $database = new Database();
        $db = $database->connect();
        $admin  = new admin($db);
       $this->assertFalse( $admin->AddQuiz(88,'Network','bla bla bla bla',100,10));
    }
    public function testDeletingQuiz()
    {
        $database = new Database();
        $db = $database->connect();
        $admin  = new admin($db);
        $this->assertTrue( $admin->DeleteQuiz(200));

    }
    public function testGetQuizById()
    {
        $database = new Database();
        $db = $database->connect();
        $access = new DB_Access($db);
       $response =  $access->read_single(1000);
       $this->assertEquals(1,$response->rowCount());

    }
    public function testGetQuizByCompanyId()
    {
        $database = new Database();
        $db = $database->connect();
        $admin  = new admin($db);
       $response= $admin->GetQuizByCompanyId(22);
        $this->assertEquals(1,$response->rowCount());
    }
    public function testLogActivity()
    {
        $database = new Database();
        $db = $database->connect();
        $control = new DB_Access($db);
        $result = $control->GetLogs();
        $this->assertTrue($result->rowCount());
    }
    public function testUpdatingQuiz()
    {
        $database = new Database();
        $db = $database->connect();
        $admin  = new admin($db);
    }
    public function testPostingRateToQuiz()
    {
        $database = new Database();
        $db = $database->connect();
        $admin  = new admin($db);
    }
}

?>
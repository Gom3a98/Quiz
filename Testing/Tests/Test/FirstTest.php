<?php

require_once '../../../api/Database.php';
require_once '../../../model/Admin.php';
require_once '../../../model/DB_Access.php';
class AdminTest extends \PHPUnit_Framework_TestCase
{
    /*
    public function testPost()
    {
        $client = new Guzzle\Http\Client('http://localhost:8080',array(
            'request.options'=>array(
                'exceptions' =>false,
            ),
        ));
        $post_item = array(

            'QuizId' => 8008,
            'QuizTitle' => 'Computer Graphics',

            'QuizDescription' => 'bla bla bla bla',
            'TotalScore' => 100,
            'Duration' => 10,
        );
        $request = $client->post('/Quiz/api/CreateQuiz.php',null,json_encode($post_item));
        $response = $client->send();

        $this->assertEquals(200,$response->getStatusCode());
        $this->assertTrue($response->hasHeader('Location'));
    }
*/
    public function testAddingNewQuiz()
    {
        $database = new Database();
        $db = $database->connect();
        $admin  = new admin($db);
       $this->assertTrue( $admin->AddQuiz(808,'OOP','bla bla bla bla',100,10));
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
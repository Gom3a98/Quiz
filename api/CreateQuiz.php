<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once 'Database.php';
include_once '../model/Admin.php';
function CreateService()
{
    $database = new Database();
    $db = $database->connect();
    $admin  = new admin($db);
    $data = json_decode(file_get_contents("php://input"));
    if($admin->AddQuiz($data->QuizId,$data->QuizTitle,$data->QuizDescription,$data->TotalScore,$data->Duration)) {
        echo json_encode(
            array('message' => 'Quiz Created')
        );
    } else {
        echo json_encode(
            array('message' => 'Quiz Not Created')
        );
    }
}


CreateService();
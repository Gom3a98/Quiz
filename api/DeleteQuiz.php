<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

include_once 'Database.php';
include_once '../model/Admin.php';
include_once '../model/logger.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$admin = new admin($db);
// Get raw posted data
$data = json_decode(file_get_contents("php://input"));


// Delete post
if($admin->DeleteQuiz($data->QuizId)) {
    echo json_encode(
        array('message' => 'Quiz deleted')
    );
    $newLog = new logger("Quiz With Id $data->QuizId is Deleted",date('Y-m-d H:m'),$db);
    $newLog->SaveLog();
} else {
    echo json_encode(
        array('message' => 'Quiz not deleted')
    );
}

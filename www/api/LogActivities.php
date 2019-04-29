
<?php
// Headers
//header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json');

include_once 'Database.php';
include_once '../model/DB_Access.php';
include_once '../model/logger.php';

$database = new Database();
$db = $database->connect();

$control = new DB_Access($db);

// Blog post query
$result = $control->GetLogs();
$num = $result->rowCount();

// Check if any posts
if($num > 0) {
    $posts_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $post_item = array(
            'logId'  => $logId,
            'event'  => $event,
            'time'   => $time

        );

        // Push to "data"
        array_push($posts_arr, $post_item);
        // array_push($posts_arr['data'], $post_item);
    }

    $newLog = new logger("Admin Viewed Activity Log",date('Y-m-d H:m'),$db);
    $newLog->SaveLog();
    // Turn to JSON & output
    echo json_encode($posts_arr);

} else {
    // No Posts
    echo json_encode(
        array('message' => 'No Posts Found')
    );
}


?>
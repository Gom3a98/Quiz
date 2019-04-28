<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once 'Database.php';
  include_once '../model/DB_Access.php';
include_once '../model/logger.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  //$post = new Post($db);
  $post = new DB_Access($db);

  // Get ID
  $qid = isset($_GET['QuizId']) ? $_GET['QuizId'] : die();

  // Get post
  $result = $post->read_single($qid);
// Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();

    //get info for Quiz
    $row = $result->fetch(PDO::FETCH_ASSOC) ;
      extract($row);

      $post_item = array(
       
        'QuizId' => $QuizId,
        'QuizTitle' => $QuizTitle,
        
        'QuizDescription' => $QuizDescription,
        'TotalScore' => $TotalScore,
        'Duration' => $Duration,
         'CompanyId'=> $CompanyId,
        'Rate' => $Rate ,
        'Numof_participant' => $Numof_participant ,
 
      );
      array_push($posts_arr, $post_item);
      unset($post_item); // $foo is gone
      
$post_item = array(); // $foo is here again
//get info for each question
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
        $post_item2 = array(
        'QId' => $QId ,
        'QuestId' => $QuestId,        
        'Quetion' => $Quetion,
        'Valid' => $Valid,
        'FakeAns1' => $FakeAns1,
        'FakeAns2' => $FakeAns2,
        'FakeAns3' => $FakeAns3,
     
      );
        
  array_push($post_item, $post_item2);
}
      // Push to "data"
      array_push($posts_arr, $post_item);
      $newLog = new logger("Quiz With Name $data->QuizTitle is Opened",date('Y-m-d H:m'),$db);
      $newLog->SaveLog();
    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Quizes Found')
    );
  }

        ?>
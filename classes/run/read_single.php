<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once 'Database.php';
  include_once 'Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get ID
  $post->QuizId = isset($_GET['QuizId']) ? $_GET['QuizId'] : die();

  // Get post
  $result = $post->read_single();

$num = $result->rowCount();
  if($num > 0) {
  // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      $post_item = array(
       'QuizId' => $QuizId,
        'QuizTitle' => $QuizTitle,
        'QuizDescription' => $QuizDescription,
        'TotalScore' => $TotalScore,
        'Duration' => $Duration,
        
        'QID' => $QId,
        'QuestId' => $QuestId,        
        'Quetion' => $Quetion,
        'Valid' => $Valid,
        'FakeAns1' => $FakeAns1,
        'FakeAns2' => $FakeAns2,
        'FakeAns3' => $FakeAns3,
      );
      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data'], $post_item);
    }
    // Turn to JSON & output
    echo json_encode($posts_arr);
}
  else
  {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
  // Make JSON
  print_r(json_encode($post_arr));

  ?>
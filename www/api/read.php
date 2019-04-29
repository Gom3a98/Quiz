
<?php 
  // Headers
 // header('Access-Control-Allow-Origin: *');
 // header('Content-Type: application/json');

  include_once 'Database.php';
  include_once 'Post.php';
include_once '../model/logger.php';

  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Blog post query
  $result = $post->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    $posts_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        'QuizId' => $QuizId,
        'QuizTitle' => $QuizTitle,

        'QuizDescription' => $QuizDescription,
        'TotalScore' => $TotalScore,
        'Duration' => $Duration,
        'CompanyId'=> $CompanyId,
        'Rate' => $Rate ,
        'Numof_participant' => $Numof_participant,

     
      );

      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data'], $post_item);
    }

      $newLog = new logger("Someone opened our Quiz List ",date('Y-m-d H:m'),$db);
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
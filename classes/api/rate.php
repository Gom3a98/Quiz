<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once 'Database.php';
  include_once 'Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);
  $data = json_decode(file_get_contents("php://input"));
  $post->Rate = $data->Rate ;
  //echo "$post->Rate";
  $post->QuizId = $data->QuizId ;



  // Update post
  if($post->update()) {
    echo json_encode(
      array('messsage' => 'Post Updated')
    );
  } else {
    echo json_encode(
      array('Rate' => 'Post Not Updated')
    );
  }
?>

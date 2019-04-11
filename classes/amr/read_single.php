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
  $post->read_single();

  // Create array
  $post_arr = array(
    'QuizId' => $post->QuizId,
    'QuizTitle' => $post->QuizTitle,
    'QuizDescription' => $post->QuizDescription,
    'TotalScore' => $post->TotalScore,
    'Duration' => $post->Duration
    'category_name' => $post->category_name
  );

  // Make JSON
  print_r(json_encode($post_arr));
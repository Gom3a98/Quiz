<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../DB_Access.php';


  // Instantiate blog post object
  $DB_Access = new DB_Access($db);

  // Get ID
  $DB_Access->QuizId = isset($_GET['QuizId']) ? $_GET['QuizId'] : die();

  // Get post
  $DB_Access->read_single();

  // Create array
  $post_arr = array(
    'QuizId' => $DB_Access->QuizId,
    'QuizTitle' => $DB_Access->QuizTitle,
    'QuizDescription' => $DB_Access->QuizDescription,
    'TotalScore' => $DB_Access->TotalScore,
    'Duration' => $DB_Access->Duration,
    'category_name' => $DB_Access->category_name
  );

  // Make JSON
  print_r(json_encode($post_arr));
<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  include_once 'Database.php';
  include_once '../model/Admin.php';
include_once '../model/logger.php';



  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate blog post object
  $post = new admin($db);
  $companyId = isset($_GET['CompanyId']) ? $_GET['CompanyId'] : die();
  // Get post
  $result = $post->GetQuizByCompanyId($companyId);
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
       'CompanyId'=> $companyId,
        'QuizId' => $QuizId,
        'QuizTitle' => $QuizTitle,
        
        'QuizDescription' => $QuizDescription,
        'TotalScore' => $TotalScore,
        'Duration' => $Duration,
         
        'Rate' => $Rate ,
        'Numof_participant' => $Numof_participant ,
 
      );
      
      // Push to "data"
          $newLog = new logger("Quiz With Name $data->QuizTitle is Opened",date('Y-m-d H:m'),$db);
      $newLog->SaveLog();
    // Turn to JSON & output
    echo json_encode($post_item);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }

        ?>
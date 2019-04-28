<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  include_once 'Database.php';
  include_once '../model/Admin.php';
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

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }

        ?>
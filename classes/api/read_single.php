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

 
$num = $result->rowCount();

  if($num > 0) {
  // Post array
    $posts_arr = array();
    // $posts_arr['data'] = array();
 $flag = false ;
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
if($flag == false){
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
      $flag = true ;
}
else
{
        $post_item = array(

        'QuestId' => $QuestId,
        
        'Quetion' => $Quetion,
        'Valid' => $Valid,
        'FakeAns1' => $FakeAns1,
        'FakeAns2' => $FakeAns2,
        'FakeAns3' => $FakeAns3,

      
      );
}
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

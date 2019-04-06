<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Quiz/classes/Admin.php';
if(isset($_POST))
{

    $tit = $_POST['Title'];
    $des = $_POST["Desc"];
    $points = $_POST["points"];
    $dur = $_POST["duration"];
    $id = rand(0,10000);
    $admin =  new Admin();
    $var = $admin->AddQuiz($id,$tit,$des,$points,$dur);
    if($var)
    {
        header("location:UI/QuestionsForm.php?id=$id");
    }
    else
    {
        echo "<script>alert('Hello')</script>";

    }

}
else
{
    echo "<h1>Error</h1>";
}

?>
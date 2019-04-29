<?php
include '../model/Admin.php';
if(isset($_POST))
{

    $tit = $_POST['Title'];
    $des = $_POST["Desc"];
    $points = $_POST["points"];
    $dur = $_POST["duration"];
    $id = rand(0,10000);
    $admin =  new Admin();
    $var = $admin->AddQuiz($id,$tit,$des,$points,$dur);
    if($var==true)
    {
        header("location:../view/QuestionsForm.php?id=$id");
    }
    else
    {
        echo "<script>alert('Error')</script>";

    }

}
else
{
    echo "<h1>Error</h1>";
}

?>
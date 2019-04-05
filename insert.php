<?php
require_once ("class.AdminAccess.php");
if(isset($_POST))
{

    $tit = $_POST['Title'];
    $des = $_POST["Desc"];
    $points = $_POST["points"];
    $dur = $_POST["duration"];
    $id = rand(0,10000);
    $admin =  new AdminAccess();
    $var = $admin->CreateQuiz($id,$tit,$des,$points,$dur);
    if($var)
    {

        header("location:UI/QuestionsForm.php");
    }
    else
    {
        echo "<script>alert('Hello')</script>";

    }

}
else
{
    echo "<h1>Kemo</h1>";
}

?>
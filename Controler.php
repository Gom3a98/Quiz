<?php
require_once ("classes/Admin.php");
require_once ("UI/header.php");
require_once ("UI/navbar.php");
$admin = new Admin();
$id = null;
if(isset($_GET['id2']))
{
    $d = $_GET['id2'];
    $admin->DeleteQuiz($d);
    header("location:index.php");

}
if(isset($_GET['id']))
{
    $id = $_GET['id1'];
    $record = $admin->GetQuize($id);
   // $row=mysql_fetch_array($record);
    echo $record;

}
if (isset($_GET['id1']))
{
    $id = $_GET['id1'];
    $record = $admin->GetQuize($id);
    $row=mysql_fetch_array($record);

    echo "
            
        <form action='' method=\"POST\" name=\"myForm\">
            <input type=\"text\" name=\"Title\" id=\"con\" class=\"form-control oditek-form\" value='{$row["QuizTitle"]}'>
            <textarea  name=\"Desc\" id=\"con\" class=\"form-control backGround\" value ='{$row["QuizDescription"]}'></textarea>
        ";

            echo "<span>Points</span>";
            echo "<select name='points' value = '{$row["TotalScore"]}'>";
            for($i=1;$i<=100;$i++)
            {
                echo "<option>$i</option>";
            }
            echo "</select>";
            echo "<span>Duration</span>";
            echo "<select name='duration' value = '{$row["Duration"]}'>";
            for($i=1;$i<=20;$i++)
            {
                echo "<option>$i</option>";
            }
            echo "</select>";

            echo "<br>";
           echo "<input  type=\"submit\" class=\"btnsub\" name=\"UpdateBtnSubmit\" id=\"btnsubmit\" value=\"Insert Quiz\">
        
            </form>";
            

}
?>

<?php

if(isset($_POST['UpdateBtnSubmit']))
{
    $tit = $_POST['Title'];
    $des = $_POST["Desc"];
    $points = $_POST["points"];
    $dur = $_POST["duration"];
    $admin->UpdataQuiz($id,$tit,$des,$points,$dur);
    header("location:index.php");

}

?>
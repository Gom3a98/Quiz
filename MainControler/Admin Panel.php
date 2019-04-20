<?php
$pageTitle = "Home";
include '../view/header.php';
include '../view/navbar.php';
require_once ("../model/class.AdminAccess.php");




echo "<br><h1>List of Available Quizes</h1><br>";
echo "<table>";
echo "<tr><th>id</th><th>Quiz Title</th><th>View</th><th>Update</th><th>Delete</th></tr>";
$counter=1;
$admin =  new AdminAccess();
$res = $admin->GetAllQuiz();
while($row=mysql_fetch_array($res))
{
    $id=$row["QuizId"];
    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$row["QuizTitle"]."</td>";
    echo "<td><a href='Controler.php?id=$id'>View</a></td>";
    echo "<td><a href='Controler.php?id1=$id'>Update</a></td>";
    echo "<td><a href='Controler.php?id2=$id'>X</a></td>";
    echo "</tr>";
}

echo "</table>";

?>

<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
</script>

<link rel="stylesheet" type="text/css" href="../view/AdminStyle.css">
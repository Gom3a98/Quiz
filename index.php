<?php
$pageTitle = "Home";
include 'UI/header.php';
include 'UI/navbar.php';
require_once ("classes/class.AdminAccess.php");




echo "<br><br><br>";
echo "<table width=60% border=2 style='margin-left:300px;'>";
echo "<tr><th>id</th><th>name</th><th>View</th><th>Update</th><th>Delete</th></tr>";
$counter=1;
$admin =  new AdminAccess();
$res = $admin->GetAllQuiz();
while($row=mysql_fetch_array($res))
{
    $id=$row["QuizId"];
    echo "<tr>";
    echo "<td>".$counter."</td>";
    echo "<td>".$row["QuizTitle"]."</td>";
    echo "<td><a href='view.php?id2=$id'>View</a></td>";
    echo "<td><a href='update.php?id2=$id'>Update</a></td>";
    echo "<td><a href='delete.php?id2=$id'>Delete</a></td>";
    echo "</tr>";
    $counter++;
}

echo "</table>";

?>
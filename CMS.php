<?php
require_once ("class.AdminAccess.php");

$admin =  new AdminAccess();

echo "<a href='insert.html'>Insert New</a><br><br><br>";
echo "<table width=100% border=2>";
echo "<tr><th>id</th><th>name</th><th>View</th><th>Update</th><th>Delete</th></tr>";
$counter=1;
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
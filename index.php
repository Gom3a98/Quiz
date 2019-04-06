<?php
$pageTitle = "Home";
include 'UI/header.php';
include 'UI/navbar.php';
require_once ("classes/class.AdminAccess.php");




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

<style>


    h1{
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
    }
    a{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 15px;
        color: #fff;

    }
    table{
        width:100%;
        table-layout: fixed;
    }
    .tbl-header{
        background-color: rgba(255,255,255,0.3);
    }
    .tbl-content{
        height:300px;
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
    }
    th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
    }
    td:hover
    {
        color:black;
    }
    td{
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 20px;
        color: #fff;
        border-bottom: solid 1px rgba(255,255,255,0.1);
    }


    /* demo styles */

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{
        background: -webkit-linear-gradient(left, #25c481, #25b7c4);
        background: linear-gradient(to right, #25c481, #25b7c4);
        font-family: 'Roboto', sans-serif;
    }
    section{
        margin: 50px;
    }


    /* follow me template */
    .made-with-love {
        margin-top: 40px;
        padding: 10px;
        clear: left;
        text-align: center;
        font-size: 10px;
        font-family: arial;
        color: #fff;
    }
    .made-with-love i {
        font-style: normal;
        color: #F50057;
        font-size: 14px;
        position: relative;
        top: 2px;
    }
    .made-with-love a {
        color: #fff;
        text-decoration: none;
    }
    .made-with-love a:hover {
        text-decoration: underline;
    }


    /* for custom scrollbar for webkit browser*/

    ::-webkit-scrollbar {
        width: 6px;
    }
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }
</style>

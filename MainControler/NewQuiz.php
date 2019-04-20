<?php
$pageTitle = "Create";
include '../view/header.php';
include '../view/navbar.php';
?>
<form action="insert.php" method="POST" name="myForm">
    <input type="text" name="Title" id="con" class="form-control oditek-form" placeholder="Quiz Title..">
    <textarea  name="Desc" id="con" class="form-control backGround" placeholder="Description.."></textarea>

    <?php
        echo "<span>Points</span>";
        echo "<select name='points'>";
        for($i=1;$i<=100;$i++)
        {
            echo "<option>$i</option>";
        }
        echo "</select>";
        echo "<span>Duration</span>";
        echo "<select name='duration'>";
        for($i=1;$i<=20;$i++)
        {
            echo "<option>$i</option>";
        }
        echo "</select>";
    ?>
    <br>
    <input  type="submit" class="btnsub" name="userbtnsubmit" id="btnsubmit" value="Insert Quiz">

</form>


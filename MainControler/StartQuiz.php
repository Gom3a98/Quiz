<?php

    if(isset($_GET['id']))
    {
        $id =  $_GET['id'];
        echo "
        <div id=$id class='myId'></div>
        ";
    }
?>

<html style="background-color:#86919D;">
<div class="Body"></div>

<div class="main">
    <div class="inner_class">

    </div>
</div>

<link rel="stylesheet" type="text/css" href="../view/UserStyle.css">
<script src="../view/QuizProcess.js"></script>


</html>
<?php
    if(isset($_GET['id']))
    {
        $id =  $_GET['id'];
        echo "
        <div id=$id class='myId'></div>
        ";
    }
?>
<html>

<div class="main">
    <div class="inner_class">

    </div>
</div>

<script src="QuizProcess.js"></script>


</html>
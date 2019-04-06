<?php
require_once ("classes/Admin.php");
if(isset($_GET['id2']))
{
    $d = $_GET['id2'];
    $admin = new Admin();
    $admin->DeleteQuiz($d);
    header("location:index.php");

}

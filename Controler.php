<?php
require_once ("classes/class.AdminAccess.php");
if(isset($_GET['id2']))
{
    $d = $_GET['id2'];
    $admin = new AdminAccess();
    $admin->DeleteQuiz($d);
    header("location:index.php");

}

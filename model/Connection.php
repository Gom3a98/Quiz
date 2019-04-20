<?php /** @noinspection ALL */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'quizdb');

function connect(&$con)
{
    $con=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
    mysql_select_db(DB_DATABASE);
}
function DisConnect(&$con)
{
    /** @noinspection PhpDeprecationInspection */
    mysql_close($con);
}
 ?>
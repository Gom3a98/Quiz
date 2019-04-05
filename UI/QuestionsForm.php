<?php
$pageTitle = "Home";
include 'header.php';
include 'navbar.php';

?>


<body>

     <form action = "" name="frmfeed" id="frmfeed" enctype="multipart/form-data" method="post" onSubmit="return validateFeedbackForm();">
         <?php
                 $names = range(1,50);

                 for($i=0;$i<50;$i++)
                 {
                     if($i%5==0)
                     {
                        echo "<input type=\"text\" name={$names[$i]} id=\"con\" class=\"form-control oditek-form\" placeholder=\"Add Question..\">";

                     }
                     else
                         {
                         echo "
                           <input type=\"text\"  name={$names[$i]} id=\"answer\"class=\"form-control oditek-form\"  placeholder=\"Answer..\">
                            
                         ";
                     }

                 }

             ?>

       <input  type="submit" class="btnsub" name="userbtnsubmit" id="btnsubmit" value="Insert Questions">


    </form>


</body>

<?php
    if(isset($_POST))
    {


    }

?>

<?php
//include 'footerStyle.php';
//include 'footer.php';

?>
<<?php 
include 'session.php';
 ?>
<?php 

if(isset($_POST)){
$n = 5;
$ques = array($n);
$answ = array($n);

for ($i=0; $i < $n; $i++) { 
  $ques[$i] = $_POST['q'.($i+1)];
  $answ[$i]=$_POST['a'.($i+1)];

}

for ($i=0; $i < $n ; $i++) { 
	# code...

$sql = "insert into question (question,answer,UserId) values
('$ques[$i]','$answ[$i]','$userId')";

if($db->query($sql)===TRUE){
	header('location:home.php');
}else{
	echo "error".$sql ."<br>".$connect_error;
}
}
$con->close();
}




 ?>






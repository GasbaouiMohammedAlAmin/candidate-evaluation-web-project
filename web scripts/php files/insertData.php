<?php
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: ../تسجيل-الدخول.php');
  exit();
  }
if(isset($_POST['fullName'])){
	$fullName=$_POST['fullName'];
	$date_birth=$_POST['date_birth'];
	$mean_school=$_POST['mean_school'];

$mean_profes=$_POST['mean_profes'];
$mark_interv=$_POST['mark_interv'];
$total=$_POST['total'];
	
	$conn=mysqli_connect("localhost","aminegasa","Amin1994;","candidateevaluation");
$query="INSERT INTO `candidate`( `fullName`, `date_birth`, `mean_school`,`mean_profes`
,`mark_interv`,`total`
) VALUES ('$fullName','$date_birth',$mean_school,$mean_profes,$mark_interv,$total)";
$result=mysqli_query($conn,$query);
echo $result;
if($result==true){
	echo "inserted...";
}
echo json_encode($result);
mysqli_close($conn);
echo "$fullName----------------";
}

?>
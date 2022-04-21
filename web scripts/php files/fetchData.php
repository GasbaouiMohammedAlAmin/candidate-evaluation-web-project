<?php
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: ../تسجيل-الدخول.php');
  exit();
  }
$conn=mysqli_connect("localhost","aminegasa","Amin1994;","candidateevaluation");

$result=mysqli_query($conn,"SELECT * FROM `candidate` order by total desc ,date_birth ");
$data=array();
while($row=mysqli_fetch_assoc($result)){
$data[]=$row;	
}
echo json_encode($data);
mysqli_close($conn)
?>
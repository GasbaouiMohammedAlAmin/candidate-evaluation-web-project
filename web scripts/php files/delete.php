<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
if ( is_numeric($id) ) {
	$conn=mysqli_connect("localhost","aminegasa","Amin1994;","candidateevaluation");

$query="delete from `candidate` where `id`=$id";
$result=mysqli_query($conn,$query);
//echo $result;
if($result==1){
	header('Location:../ترتيب-المترشحين.php');
}

mysqli_close($conn);
}
}

?>

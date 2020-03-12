<?php
$id= $_GET['id'];
$conn=mysqli_connect('localhost','root','','crud');
$sql="DELETE FROM student WHERE id=$id ";
if(mysqli_query($conn,$sql)){
	header("Location:index.php");
}else{
	echo "not deleted";
}

?>
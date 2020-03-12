<?php 
$conn=mysqli_connect('localhost','root','','crud');
$name=$_POST['name'];
$roll=$_POST['roll'];
$age=$_POST['age'];
$cgpa=$_POST['cgpa'];
$sql="insert into student values('','$name','$roll','$age','$cgpa')";
if(mysqli_query($conn,$sql)){
	header("Location:index.php");
}
else{
	 echo"not inserted";
}
?>

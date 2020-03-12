<?php 
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','crud');
$name=$_POST['name'];
$roll=$_POST['roll'];
$age=$_POST['age'];
$cgpa=$_POST['cgpa'];
$sql="UPDATE student SET name='$name' roll='$roll',age='$age',cgpa='$cgpa' WHERE id=$id";
if(mysqli_query($conn,$sql)){
	header("Location:show.php?id=" .$id);
}
else{
	header("Location:index.php"); 
}
?>
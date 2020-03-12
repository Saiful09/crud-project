<?php
$conn=mysqli_connect('localhost','root','','crud');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Student Info</title>
  </head>
  <body>
  <br>
    <div class="container">
	<div class="row">
	<div class="col-md-3">
	<a class="btn btn-info" href="insert.php">New Student</a>
	</div>
	<div class="col-md-9">
	<h2>Student List</h2>
	<hr>
	<table class="table">
	<tr>
	<th>id</th>
	<th>Name</th>
	<th>Roll</th>
	<th>Age</th>
	<th>Cgpa</th>
	<th>Actions</th>
	</tr>
	<?php 
$q1="select * from student";
$run=mysqli_query($conn,$q1);
while($row=mysqli_fetch_array($run))
{   $id=$row['id'];
	$name=$row['name'];
	$roll=$row['roll'];
	$age=$row['age'];
	$cgpa=$row['cgpa'];
	
?>
<tr>
    <td><?php echo $id;?></td>
	<td><?php echo $name;?></td>
	<td><?php echo $roll;?></td>
	<td><?php echo $age;?></td>
	<td><?php echo $cgpa;?></td>
	<td>
	<a class="btn btn-info" href="show.php?id=<?php echo $row['id']?>">View</a>
	<a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']?>">Edit</a>
	<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
	</td>
	</tr>
<?php
}
?>
	</table>
	
	</div>
	</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$id= $_GET['id'];
$conn=mysqli_connect('localhost','root','','crud');
$sql="SELECT * FROM student WHERE id=$id ";
$result=mysqli_query($conn,$sql);
$std=mysqli_fetch_assoc($result);
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
	<a class="btn btn-info" href="index.php">Student list</a>
	</div>
	<div class="col-md-9">
	<h2>Edit Student</h2>
	<hr>
	<form action="update.php?id=<?php echo $id?>" method="post">
	<div class="form-group">
	<label for="name">Name</label>
	<input required type="text" class="form-control" name="name" placeholder=" Student Name" value="<?php echo $std['name']?>">
	</div>
	<div class="form-group">
	<label for="name">Roll</label>
	<input required type="text" class="form-control" name="roll" placeholder="Student Roll" value="<?php echo $std['roll']?>">
	</div>
	<div class="form-group">
	<label for="name">Age</label>
	<input required type="text" class="form-control" name="age" placeholder="Student Age" value="<?php echo $std['age']?>">
	</div>
	<div class="form-group">
	<label for="name">Cgpa</label>
	<input required type="text" class="form-control" name="cgpa" placeholder="Student Cgpa" value="<?php echo $std['cgpa']?>">
	</div>
	<button type="submit"class="btn btn-danger">Submit</button>
	</form>
	
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
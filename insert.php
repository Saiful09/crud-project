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
	<a class="btn btn-info" href="index.php">Student list</a>
	</div>
	<div class="col-md-9">
	<h2>Add New Student</h2>
	<hr>
	<form action="store.php" method="post">
	<div class="form-group">
	<label for="name">Name</label>
	<input required type="text" class="form-control" name="name" placeholder=" Student Name">
	</div>
	<div class="form-group">
	<label for="name">Roll</label>
	<input required type="text" class="form-control" name="roll" placeholder="Student Roll">
	</div>
	<div class="form-group">
	<label for="name">Age</label>
	<input required type="text" class="form-control" name="age" placeholder="Student Age">
	</div>
	<div class="form-group">
	<label for="name">Cgpa</label>
	<input required type="text" class="form-control" name="cgpa" placeholder="Student Cgpa">
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
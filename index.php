<?php 
include("obj/dbConn.php");
$sql = "SELECT * FROM todo_tasks";
$rec = $conn->query( $sql );

$num = $rec->num_rows;

echo $num;
?>

<!DOCTYPE html>
<html>
<head>
	<title>TO DO LIST</title>
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/custom.css"/>
</head>
<body>
	<div class="container">
			<div class="row"></div>
			<div class="col-md-1"></div>
			<div class="col-md-10"></div>
<form id="toDoForm" action="processData.php" method="POST">
	<input type="text" class="form-control" placeholder="Text Input" id="taskInput" name="taskInput"></input>
	<button class="btn btn-default" type="submit" id="actionBtn">Success</button>
</form>
	<div class="col-md-1"></div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/validator.js"></script>
</body>
</html>
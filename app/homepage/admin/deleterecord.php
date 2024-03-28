<?php
	include('connect.php');
	$id=$_GET['id'];
	$sql = "DELETE FROM record WHERE id= $id";
	$result = mysqli_query($conn, $sql);
	

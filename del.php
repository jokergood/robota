<?php
mysql_connect('localhost','jojo','12345');
mysql_select_db('user');

$id = $_GET['id'];
$sql = "DELETE FROM materialu WHERE id='$id'";

mysql_query($sql);
	header('Location: http://localhost/robota/ves_material.php');
	exit;
?>
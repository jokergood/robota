<?php
mysql_connect('localhost','jojo','12345');
mysql_select_db('user');

     
 if (empty ($_POST['title']) or empty ($_POST['text']) or empty ($_POST['text'])){
 echo "вы ввели не все данные! <a href='http://localhost/robota/form.php' onclick='history.go(-1); return false;'>Назад</a>";
	}else{
	
	$title = $_POST['title'];  
    $text = $_POST['text'];
	$id = $_POST['id'];
	
		$sql = "UPDATE materialu SET title = '$title', text = '$text' WHERE id = '$id'";
	mysql_query($sql);
	
	header('Location: http://localhost/robota/material.php');
	exit;
		}
?>

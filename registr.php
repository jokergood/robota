<?php
mysql_connect('localhost','jojo','12345');
mysql_select_db('user');

     
 if (empty ($_POST['login2']) or empty ($_POST['pass2'])){
 echo "вы ввели не все данные! <a href='http://localhost/robota/index.php' onclick='history.go(-1); return false;'>Назад</a>";
	}else{
	
	$login2 = $_POST['login2'];  
    $pass2 = md5($_POST['pass2']);
	
		$sql = "
	INSERT INTO
		avtorisize (login, pass)
	VALUES
		('$login2','$pass2')
	";
	mysql_query($sql);
	
	header('Location: http://localhost/robota/index.php');
	exit;
		}
?>

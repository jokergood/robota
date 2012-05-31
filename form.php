<?php
mysql_connect('localhost','jojo','12345');
mysql_select_db('user');

$sql = "SELECT login, pass FROM avtorisize";
$res = mysql_query($sql);

$row = mysql_fetch_assoc($res);
$login = $row['login'];
$pass = $row['pass'];

if (empty ($login) and empty ($pass)){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Доступ запрещен</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h2>Форма для регистрации участников</h2>
<form action="registr.php" method="post">
Имя</br>
<input type="text" name="login2" value="Введите Ваше имя"></input>
<br></br>    
Пароль<br></br>
<input type="text" name="pass2"></input>
<br></br>
<input type="submit" value="Отправить"></input>
</form>
</body>
</html>
<?php
}
else{
$pass2 = '';
$login2 = '';
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $login2 = $_POST['login2'];  
   $pass2 = md5($_POST['pass2']);

   }
	if($login == $login2 and $pass2 == $pass){
	header('http://localhost/robota/material.php');
	exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>Доступ запрещен</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h2>Форма для Авторизацыии участников</h2>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
Имя</br>
<input type="text" name="login2" value="Введите Ваше имя"></input>
<br></br>    
Пароль<br></br>
<input type="text" name="pass2"></input>
<br></br>
<input type="submit" value="Отправить"></input>
</form>
</body>
</html>
<?php     
}
?>



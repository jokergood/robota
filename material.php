<?php
if (isset($_GET['id']) && !empty($_GET['id']))
{
$id = $_GET['id'];
mysql_connect('localhost','jojo','12345');
mysql_select_db('user');

$sql = "SELECT id,title,text FROM materialu WHERE id = '$id'";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>�������</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h2>����� ��� ��������� ��������</h2>
<form action="material_pereza.php" method="post">
<?php $row['id']; ?>
���������</br>
<input type="text" name="title" size="95" value="<?php echo $row['title']; ?>"></input>
<br></br>
<br></br>
<br></br>    
����� ��������<br></br>
<p><textarea rows="18" cols="80" name="text"><?php echo $row['text']; ?></textarea></p>
<br></br>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>"></input>
<input type="submit" value="���������"></input>
</form>
<br></br>
<br></br>
<a href="http://localhost/robota/ves_material.php"><button>������� � ���������</button></a>
</body>
</html>
<?php
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>�������</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<h2>����� ��� ��������� ��������</h2>
<form action="material_bd.php" method="post">
���������</br>
<input type="text" name="title" size="95"></input>
<br></br>
<br></br>
<br></br>    
����� ��������<br></br>
<p><textarea rows="18" cols="80" name="text"></textarea></p>
<br></br>
<input type="submit" value="���������"></input>
</form>
<br></br>
<br></br>
<a href="http://localhost/robota/ves_material.php"><button>������� � ���������</button></a>
</body>
</html>
<?php
}
?>
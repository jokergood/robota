<?php
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
<title>Матеріли</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
#layer1 {
float: left; /* Обтекание по правому краю */
    border: 1px solid black;  /* Параметры рамки */
    padding: 10px;  /* Поля вокруг текста */
    margin-right: 20px;  /* Отступ справа */
    width: 150px; /* Ширина блока */
	height: 500px;
}
</style>
</head>
<body>

<?php
echo "<div id='layer1'>";
echo "<br></br>";
echo "<br></br>";
echo "<a href='http://localhost/robota/material.php'><button>добавить матерял</button></a>";
echo "<br></br>";
echo "<br></br>";
echo "<a href='http://localhost/robota/material.php?id=".$id."'><button>Редактировать</button></a>";
echo "<br></br>";
echo "<br></br>";
echo "<a href='http://localhost/robota/del.php?id=".$id."'><button>Удалить</button></a>";
echo "</div>";
echo "<div>";
echo"<h2>Просмотр матерялов</h2>";
echo "<p>";
echo $row['title'];
echo "<br></br>";
echo "<br></br>";
echo $row['text'];
echo "<br></br>";
echo "</p>";
echo "</div>";

?>
</body>
</html>
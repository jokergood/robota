<?php
mysql_connect('localhost','jojo','12345');
mysql_select_db('user');

$sql = "SELECT id,title,text FROM materialu";
$res = mysql_query($sql);

//функцыя обрезает файл на 150 символе
function tru_krapku ($fife,$poisk){
if($poisk >= strlen($fife)){
echo "Вы хотите обрезать больше чем сам файл!!!";
}else{
if(" " ==  substr($fife,$poisk,1)){
echo substr($fife,0,$poisk) ."...";
} else {
			while(" " != substr($fife,$poisk,1)){
			$poisk--;
			}
			echo substr($fife,0,$poisk)."...";
		}
}		
}

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
echo "<a href='http://localhost/robota/material.php'><button>добавить матерял</button></a>";
echo "<br></br>";
echo "<br></br>";
echo "</div>";
while($row = mysql_fetch_assoc($res))
{
echo "<div>";
echo "<p>";
echo $row['title'];
echo "<br></br>";
tru_krapku ($row['text'],150);
echo "<br></br>";
echo "<a href='http://localhost/robota/prosmotr.php?id=".$row['id']."'><button>Read More</button></a>";
echo "<br></br>";
echo "</p>";
echo "</div>";
}
?>
</body>
</html>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<body>
<center>
<?php
$con = mysqli_connect("localhost","root","");//连接MySQL数据库
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db( $con,"mylyb");//选择数据库


echo "<table border='1'>";
echo "<tr><th>留言者</th><th>留言内容</th><th>时间</th><th>操作</th></tr>";

//$s1=$_POST[writer];
//$s2=$_POST[content];
$sql = " INSERT INTO liuyan(writer,content)
 VALUES('$_POST[writer]','$_POST[content]')";//向数据库表中插入新记录

if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

$result = mysqli_query($con,"SELECT * FROM liuyan");//查看liuyan表所有的数据

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td aligh ='center'>$row[writer]</td>";
    echo "<td aligh ='center'>$row[content]</td>";
    echo "<td aligh ='center'>$row[content]</td>";
    echo "<td aligh ='center'><a href=lyb_delete.php?writer=$row[writer]>删除</a></td>";
    echo "</tr>";
    echo "<br>";
}//循环输出数据

echo "</table>";


mysqli_close($con);
?>
</center>
</body>
</html>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<body>
<center>
<?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db( $con,"mylyb");
    date_default_timezone_set("Asia/Shanghai");  //设置时区

    echo "<table border='1'>";
    echo "<tr><th>留言者</th><th>留言内容</th><th>时间</th><th>操作</th></tr>";

    $sql = " INSERT INTO liuyan(writer,content,sj)
    VALUES('$_POST[writer]','$_POST[content]',now())";//向数据库表中插入新记录

    mysqli_query($con,$sql);
    $result = mysqli_query($con,"SELECT * FROM liuyan");//查看liuyan表所有的数据
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td aligh ='center'>$row[writer]</td>";
        echo "<td aligh ='center'>$row[content]</td>";
        echo "<td aligh ='center'>$row[sj]</td>";
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

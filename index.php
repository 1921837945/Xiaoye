<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <center><a href="menu.php">目录</a></center>
</head>
<body>
    <center>
        <?php
        $con = mysqli_connect("localhost","root","");
        mysqli_select_db( $con,"mylyb");
        date_default_timezone_set("Asia/Shanghai");  //设置时区
        
        $result = mysqli_query($con,"SELECT * FROM liuyan");
        $l=mysqli_num_rows($result);
        $lou =$l['lou'] +1;
        mysqli_free_result($result);
        $sql = " INSERT INTO liuyan(lou,writer,content,sj)
        VALUES($l+1,'$_POST[writer]','$_POST[content]',now())";
        
        if(!mysqli_query($con,$sql)){
            echo "留言添加失败";
        }else{
            echo "留言添加成功";
        }

        mysqli_close($con);
        ?>
    </center>
</body>
</html>

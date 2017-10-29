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
        $lou = $_GET['lou'];
        $sql = "delete from liuyan where lou ='".$lou."'";
        mysqli_query($con,$sql);
        $mark  = mysqli_affected_rows($con);

        if($mark>0){
            echo "留言删除成功";
        }else{
            echo "留言删除失败";
        }

        mysqli_close($con);
        ?>
    </center>

</body>

</html>

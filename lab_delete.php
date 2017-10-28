<?php

$con = mysqli_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db( $con,"mylyb");
$writer = $_GET['writer'];
$sql = "delete from liuyan where writer='".$writer."'";
mysqli_query($con,$sql);
$mark  = mysqli_affected_rows($con);

if($mark>0){
    echo "成功";
}else{
    echo "失败";
}

mysqli_close($con);
?>

<?php
require_once '../connect.php';
$name=$_GET['name'];//得到method传过来的值
$sql="DELETE FROM library WHERE name='$name'";
if(mysqli_query($con,$sql))
{//执行完命令后弹出一个对话框提示你成功或者失败然后返回select.php页面
    echo "<script>alert('delete success!');window.location.href='select.php';</script>";
    echo "<script>alert('delete failed!');window.location.href='select.php';</script>";
    
}
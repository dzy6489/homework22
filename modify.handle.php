<?php
require_once '../connect.php';
$name=$_POST['name'];
$content=$_POST['content'];
$sql="UPDATE library SET content='$content' WHERE name='$name'";
if(mysqli_query($con,$sql))
{//执行完命令后弹出一个对话框提示你成功或者失败然后返回select.php页面
    echo "<script>alert('modify success!');window.location.href='select.php';</script>";
    echo "<script>alert('modify failed!');window.location.href='select.php';</script>";
    
}
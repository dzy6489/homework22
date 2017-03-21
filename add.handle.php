<?php
require_once '../connect.php';
$name=$_POST['name'];//得到表单也就是框框里的值
$content=$_POST['content'];
$price=$_POST['price'];
echo $name;
$sql="INSERT INTO library(name,content,price)VALUE('$name','content',$price)";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('add success!');window.location.href='select.php';</script>";
    echo "<script>alert('add failed!');window.location.href='select.php';</script>";

}
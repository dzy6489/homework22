<?php
require_once '../connect.php';
$name=$_POST['name'];//�õ���Ҳ���ǿ�����ֵ
$content=$_POST['content'];
$price=$_POST['price'];
echo $name;
$sql="INSERT INTO library(name,content,price)VALUE('$name','content',$price)";
if(mysqli_query($con,$sql))
{
    echo "<script>alert('add success!');window.location.href='select.php';</script>";
    echo "<script>alert('add failed!');window.location.href='select.php';</script>";

}
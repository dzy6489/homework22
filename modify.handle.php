<?php
require_once '../connect.php';
$name=$_POST['name'];
$content=$_POST['content'];
$sql="UPDATE library SET content='$content' WHERE name='$name'";
if(mysqli_query($con,$sql))
{//ִ��������󵯳�һ���Ի�����ʾ��ɹ�����ʧ��Ȼ�󷵻�select.phpҳ��
    echo "<script>alert('modify success!');window.location.href='select.php';</script>";
    echo "<script>alert('modify failed!');window.location.href='select.php';</script>";
    
}